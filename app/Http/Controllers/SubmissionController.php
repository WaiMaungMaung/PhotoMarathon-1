<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Helper;
use Illuminate\Contracts\Session\Session;


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

        $d = DB::table('configs')->where('type','student')->first();        
        $isValidStudent = Helper::isValidTime($d->from_time,$d->to_time);

        $d = DB::table('configs')->where('type','theme1')->first();        
        $isValidTheme1 = Helper::isValidTime($d->from_time,$d->to_time);

        $d = DB::table('configs')->where('type','theme2')->first();        
        $isValidTheme2 = Helper::isValidTime($d->from_time,$d->to_time);
        
        $data = array(
            'theme1'=>$theme1,
            'theme2'=>$theme2,
            'theme3'=>$theme3,
            'isValidStudent'=>$isValidStudent,
            'isValidTheme1'=>$isValidTheme1,
            'isValidTheme2'=> $isValidTheme2
        );

        // print_r($data);

        return view('submission')->with('data',$data);
    }
}