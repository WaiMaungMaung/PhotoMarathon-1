<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helper;
use Illuminate\Support\Facades\DB;

class UploadFileController extends Controller
{
    public function __construct()
    {

    }
    public function imageUpload()
    {
        request()->headers->set('referer', '');
        $referer = request()->headers->get('referer');
        print_r($referer);

        if($referer == null){
            return view('home');
        }else{
            return view('auth.register');
        }
        



        // 
        // return view('file-upload');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function imageUploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
  
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('payslips'), $imageName);

        // $imageName = time().'.'.$request->image->extension();  
        // $request->image->move(public_path('payslips'), $imageName);

        
        // if ($files = $request->file('image')) {
        //     $destinationPath = public_path('payslips'); // upload path
        //     $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //     $files->move($destinationPath, $profileImage);
        // }   
   
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
   
    }
}
