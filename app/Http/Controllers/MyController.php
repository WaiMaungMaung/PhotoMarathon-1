<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //about
    public function __construct()
    {
        // $this->middleware(['auth','verified']);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    public function admin_reg(){
        return view('admin_register');
    }

    public function termncondition()
    {
        return view('termncondition');
    }
}
