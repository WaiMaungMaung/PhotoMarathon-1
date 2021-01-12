<?php

namespace App\Http\Controllers;

use App\Models\submission;
use DateTime as GlobalDateTime;
use Illuminate\Support\Facades\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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
        return view('photosubmit')->with('id',$id);
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
        $img="";
        if($enrollData->isNotEmpty()){
            $arr_enroll= $enrollData->toArray();
            $obj_enroll = $arr_enroll[0];
            $cBrand = $obj_enroll->camera_brand;
            if(request()->hasFile('image')){                
                $img=request()->file('image')->getClientOriginalName();
                request()->file('image')->move(public_path($themeCAT),$cmp.$cBrand.$img,'');            
            }
            // to control submission time 
            $isValidTime = true;
            date_default_timezone_set('Asia/Rangoon'); 
            $submitTime = date('d M Y h:i:s A');
            $status="";
            
            if($isValidTime){
                $data=array('name'=>$name,'themeCAT'=>$themeCAT,'orgfileName'=>$img,'submitTime'=>$submitTime,'id'=>$id);
                $status="success";
                $msg = "Submission Success. You will recieve successful submission email.";
                submission::create([
                    'cmp'=>$cmp,
                    'name'=>$name,
                    'themeCAT'=>$themeCAT,
                    'fileName'=>$cmp.$cBrand.$img,
                    'submitTime'=>now(),
                ]);
                Mail::send('submitMail', $data, function($message) {                
                    $message->to(Auth::user()->email, '')->subject
                    ('Submission Successful!');
                    $message->from(env('MAIL_FROM_ADDRESS'),'Cannon Photo Marathon');
                });
            }else{
                $status="error";
                $msg = "Sorry, Photo submission time is over";                
            }   
            return redirect()->route('submission')
                            ->with($status,$msg);
            }else{
                return redirect()->route('dashboard');
            }        
        }
}
