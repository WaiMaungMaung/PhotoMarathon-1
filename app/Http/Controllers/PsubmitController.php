<?php

namespace App\Http\Controllers;

use App\Models\submission;
use DateTime as GlobalDateTime;
use Illuminate\Support\Facades\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Helper;
use Illuminate\Support\Facades\Storage;



// use App\Providers\RouteServiceProvider;

class PsubmitController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index(){
        return view('photosubmit');
    }

    public function show(String $id){
        $data = DB::table('configs')->where('type',$id)->first();
        $isValid = Helper::isValidTime($data->from_time,$data->to_time);
        if($isValid){
            return view('photosubmit')->with('id',$id);
        }else{
            return view('expired')->with('msg','Sorry, Submission Time is not start or over');
        }
        
    }
    
    public function showByCat(Request $id,String $cat){
        $search =  $id->input('q');
        if($search!=""){
            $users = submission::join('enrollments',
            function($join)
            {
            $join->on([['submissions.cmp','=','enrollments.cpm'],['submissions.themeCAT','=','enrollments.theme_category']]);
            })->
            where('themeCAT','=',$cat)
            ->where(function ($query) use ($search){
                    $query->where('name', 'like', '%'.$search.'%')
                        ->orWhere('cpm', 'like', '%'.$search.'%');})->paginate(10);  
            
               $users->appends(['q' => $search]);
            }
        else{
            $users = submission::
            join('enrollments',
            function($join)
            {
                $join->on([['submissions.cmp','=','enrollments.cpm'],['submissions.themeCAT','=','enrollments.theme_category']]);

            })->where('themeCAT','=',$cat)
            ->paginate(10);
        }
        return view('admin_submit_view',['data'=>$users,'category'=>$cat]);
    }

    public function store(Request $request, String $id){
        $request->validate([
            'image' => 'required'
        ]);
        $cmp = $request->cpm;
        $name= $request->user_name;
        $themeCAT= $request->theme_category;
        $enrollData = DB::table('enrollments')->where([
            ['cpm',$cmp],['theme_category',$themeCAT]
            ])->get();
        if($enrollData->isNotEmpty()){
            $arr_enroll= $enrollData->toArray();
            $obj_enroll = $arr_enroll[0];
            $cBrand = $obj_enroll->camera_brand;
            if(request()->hasFile('image')){
                $filenameWithExt = $request->file('image')->getClientOriginalName();
                //Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $cmp.'_'.$cBrand.'_'.$filename.'.'.$extension;
                // Upload Image
                $request->file('image')->storeAs($themeCAT,$fileNameToStore);                
            }
            date_default_timezone_set('Asia/Rangoon'); 
            $submitTime = date('d M Y h:i:s A');
            $status="";
            $data=array('name'=>$name,'themeCAT'=>$themeCAT,'orgfileName'=>$filenameWithExt,'submitTime'=>$submitTime,'id'=>$id);
            $status="success";
            $msg = "Submission Success. You will recieve successful submission email.";
            submission::create([
                'cmp'=>$cmp,
                'name'=>$name,
                'themeCAT'=>$themeCAT,
                'fileName'=>$fileNameToStore,
                'submitTime'=>now(),
            ]);
            Mail::send('submitMail', $data, function($message) {                
                $message->to(Auth::user()->email, Auth::user()->name)->subject
                ('Submission Successful!');
                $message->from(env('MAIL_FROM_ADDRESS'),'Cannon Photo Marathon');
            });
            return redirect()->route('submission')
                            ->with($status,$msg);
        }else{
            return redirect()->route('dashboard');
        }        
    }
}
