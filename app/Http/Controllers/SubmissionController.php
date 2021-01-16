<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Helper;
use Exception;

class SubmissionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index(){

        $theme1 = DB::table('submissions')
        ->where([
            ['cmp','=',Auth::user()->cmp],
            ['themeCAT','=','Student']
            ])->count();

        $theme2 = DB::table('submissions')
        ->where([
            ['cmp','=',Auth::user()->cmp],
            ['themeCAT','=','Theme1']
            ])->count();

        $theme3 = DB::table('submissions')
        ->where([
            ['cmp','=',Auth::user()->cmp],
            ['themeCAT','=','Theme2']
            ])->count();

        $d = Helper::getConfigsData();
        if(array_key_exists('student',$d)){
            if($d['theme1'] != null){
                $isValidStudent = Helper::isValidTime($d['student']->from_time,$d['student']->to_time);
            }else{
                $isValidStudent = false;
            }
        }
        else{
            $isValidStudent = false;
        }

        if(array_key_exists('theme1',$d)){
            if($d['theme1'] != null){
                $isValidTheme1 = Helper::isValidTime($d['theme1']->from_time,$d['theme1']->to_time);
            }else{
                $isValidTheme1 = false;
            }
        }else{
            $isValidTheme1 = false;
        }

        if(array_key_exists('theme2',$d)){
            if($d['theme2'] != null){
                $isValidTheme2 = Helper::isValidTime($d['theme2']->from_time,$d['theme2']->to_time);
            }else{
                $isValidTheme2 = false;
            }
        }else{
            $isValidTheme2 = false;
        }
        
        $data = array(
            'theme1'=>$theme1,
            'theme2'=>$theme2,
            'theme3'=>$theme3,
            'isValidStudent'=>$isValidStudent,
            'isValidTheme1'=>$isValidTheme1,
            'isValidTheme2'=> $isValidTheme2
        );
        return view('submission')->with('data',$data);
    }
}