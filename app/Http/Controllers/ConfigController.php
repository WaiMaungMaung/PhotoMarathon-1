<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Configs;
use App\Http\Helper;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if(Auth::user()->access != null){
            $data = Helper::getConfigsData();
            return view('configuration')->with('data',$data);
        }else{
            return view('home');
        }        
    }

    public function reg_time_store(Request $request){
        $request->validate([
            'regft' => 'required',
            'regtt' => 'required'
        ]);     
        
        $t_type=$request->reg;
        $fromtime=date("Y-m-d H:i:s", strtotime($request->regft));
        $totime=date("Y-m-d H:i:s", strtotime($request->regtt));

        if($totime > $fromtime){
            if(DB::table('configs')->where('type',$t_type)->doesntExist()){
                Configs::create([
                    'type'=>$t_type,
                    'from_time'=>$fromtime,
                    'to_time' =>$totime
                ]);
    
            }else{
                DB::table('configs')->where('type', $t_type)->update(['from_time'=>$fromtime,'to_time'=>$totime]);
            }
            $data = Helper::getConfigsData();
            $data['msg']="process successful!";
            return view('configuration')->with('data',$data);

        }else{
            $data = Helper::getConfigsData();
            $data['msg']="To time must be greater than From time!";
            return view('configuration')->with('data',$data);
        }        
    }

    public function enroll_time_store(Request $request){
        $request->validate([
            'enrollft' => 'required',
            'enrolltt' => 'required'
        ]);
        $t_type=$request->enroll;
        $fromtime=date("Y-m-d H:i:s", strtotime($request->enrollft));
        $totime=date("Y-m-d H:i:s", strtotime($request->enrolltt));
        if($totime > $fromtime){
            if(DB::table('configs')->where('type',$t_type)->doesntExist()){
                Configs::create([
                    'type'=>$t_type,
                    'from_time'=>$fromtime,
                    'to_time' =>$totime
                ]);
    
            }else{
                DB::table('configs')->where('type', $t_type)->update(['from_time'=>$fromtime,'to_time'=>$totime]);
            }
            $data = Helper::getConfigsData();
            $data['msg']="process successful!";
            return view('configuration')->with('data',$data);
        }else{
            $data = Helper::getConfigsData();
            $data['msg']="To time must be greater than From time!";
            return view('configuration')->with('data',$data);
        }
    }
    public function student_time_store(Request $request){
        $request->validate([
            'studentft' => 'required',
            'studenttt' => 'required'
        ]);
        $t_type=$request->student;
        $fromtime=date("Y-m-d H:i:s", strtotime($request->studentft));
        $totime=date("Y-m-d H:i:s", strtotime($request->studenttt));
        if($totime>$fromtime){
            if(DB::table('configs')->where('type',$t_type)->doesntExist()){
                Configs::create([
                    'type'=>$t_type,
                    'from_time'=>$fromtime,
                    'to_time' =>$totime
                ]);
    
            }else{
                DB::table('configs')->where('type', $t_type)->update(['from_time'=>$fromtime,'to_time'=>$totime]);
            }
            $data = Helper::getConfigsData();
            $data['msg']="process successful!";
            return view('configuration')->with('data',$data);
        }else{
            $data = Helper::getConfigsData();
            $data['msg']="To time must be greater than From time!";
            return view('configuration')->with('data',$data);
        }
    }
    public function theme1_time_store(Request $request){
        $request->validate([
            'theme1ft' => 'required',
            'theme1tt' => 'required'
        ]);
        $t_type=$request->theme1;
        $fromtime=date("Y-m-d H:i:s", strtotime($request->theme1ft));
        $totime=date("Y-m-d H:i:s", strtotime($request->theme1tt));
        if($totime > $fromtime){
            if(DB::table('configs')->where('type',$t_type)->doesntExist()){
                Configs::create([
                    'type'=>$t_type,
                    'from_time'=>$fromtime,
                    'to_time' =>$totime
                ]);
    
            }else{
                DB::table('configs')->where('type', $t_type)->update(['from_time'=>$fromtime,'to_time'=>$totime]);
            }
            $data = Helper::getConfigsData();
            $data['msg']="process successful!";
            return view('configuration')->with('data',$data);
        }else{
            $data = Helper::getConfigsData();
            $data['msg']="To time must be greater than From time!";
            return view('configuration')->with('data',$data);
        }
    }
    public function theme2_time_store(Request $request){
        $request->validate([
            'theme2ft' => 'required',
            'theme2tt' => 'required'
        ]);
        $t_type=$request->theme2;
        $fromtime=date("Y-m-d H:i:s", strtotime($request->theme2ft));
        $totime=date("Y-m-d H:i:s", strtotime($request->theme2tt));
        if($totime > $fromtime){
            if(DB::table('configs')->where('type',$t_type)->doesntExist()){
                Configs::create([
                    'type'=>$t_type,
                    'from_time'=>$fromtime,
                    'to_time' =>$totime
                ]);
    
            }else{
                DB::table('configs')->where('type', $t_type)->update(['from_time'=>$fromtime,'to_time'=>$totime]);
            }
            $data = Helper::getConfigsData();
            $data['msg']="process successful!";
            return view('configuration')->with('data',$data);
        }else{
            $data = Helper::getConfigsData();
            $data['msg']="To time must be greater than From time!";
            return view('configuration')->with('data',$data);
        }
    }

}
