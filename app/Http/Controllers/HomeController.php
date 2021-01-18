<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Auth;
use App\Http\Helper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dob = Auth::user()->dob;
        $exedate = '2020-12-31';
        $age= \Carbon\Carbon::parse($dob)->diff($exedate);

        $data = DB::table('configs')->where('type','enroll')->first();
        if($data != null){
            $isValid = Helper::isValidTime($data->from_time,$data->to_time);
            $from_time=$data->from_time;
            $to_time=$data->to_time;
        }else{
            $isValid = false;
            $from_time=now();
            $to_time=now();
        }
        $d = array('age'=>$age->y,'isValid'=>$isValid,'from_time'=>$from_time,'to_time'=>$to_time);
        return view('home')->with('data',$d);
    }
}
