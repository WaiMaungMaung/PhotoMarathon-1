<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Enrollment;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Helper;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showByCat(Request $id,String $cat){

        $search =  $id->input('q');
        if($search!=""){
            $users = Enrollment::join('users','enrollments.cpm','=','users.cmp')
            ->where('theme_category','=',$cat)
            ->where(function ($query) use ($search){
                    $query->where('name', 'like', '%'.$search.'%')
                        ->orWhere('cpm', 'like', '%'.$search.'%');})->paginate(3);  
            
               $users->appends(['q' => $search]);
            }
        else{
            $users = Enrollment::
            join('users','enrollments.cpm','=','users.cmp')
            ->where('theme_category','=',$cat)
            ->paginate(3);
        }
        return view('admin_enroll_view',['data'=>$users,'category'=>$cat]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{

           if( DB::table('enrollments')->where([
      ['cpm','=',Auth::user()->cmp],
      ['theme_category','=',$request->get('theme_category')],
            ])){
        $request->validate([
            'camera'=>'required',
            
        ]);
        $member=new Enrollment(
            ['cpm'=>$request->get('cpm'),
             'camera_brand'=>$request->get('camera'),
             'theme_category'=>$request->get('theme_category'),
            ]

        );
       $member->save();
       $theme_cat=$request->get('theme_category');

       $data = array('theme_cat'=>$theme_cat);
       Mail::send('mail', $data, function($message) {
          $message->to(Auth::user()->email, ' .')->subject
             ('ENROLLED!');
          $message->from(env('MAIL_FROM_ADDRESS'),'Canon Photo Marathon');
       });
    }
    else{
        echo "no data";
    }
    }
    catch(Exception $e){
        // return view('ErrorReport')->with('error',$e);
        return back()->with('errors',$e->getMessage())->withInput();
    }
 
 
       return redirect('/dashboard')->with('success','Enroll done');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        $data = DB::table('configs')->where('type','enroll')->first();
        if($data != null){
            $isValid = Helper::isValidTime($data->from_time,$data->to_time);  
        }else{
            $isValid = false;
        }
        if($isValid){
            return view('enroll')->with('id',$id);
        }else{
            return view('expired')->with('msg','Sorry, '.$id.' Enrollment Time is not start or over.');
        }       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        echo "updated";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
