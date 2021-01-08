<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
            ['themeCAT','=','Theme1']
            ])->count();

        $theme2 = DB::table('submissions')
        ->where([
            ['cmp','=',Auth::user()->cmp],
            ['themeCAT','=','Theme2']
            ])->count();

        $theme3 = DB::table('submissions')
        ->where([
            ['cmp','=',Auth::user()->cmp],
            ['themeCAT','=','Theme3']
            ])->count();
            
        $data = array(
            'theme1'=>$theme1,
            'theme2'=>$theme2,
            'theme3'=>$theme3
        );
        // print_r($data);

        return view('submission')->with('data',$data);
    }
}