<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('enroll');
        
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
        
        return view('enroll')->with('id',$id);

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
