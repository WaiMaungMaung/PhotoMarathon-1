<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Auth;

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
        return view('home')->with('age',$age->y);
    }
}
