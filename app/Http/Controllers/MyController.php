<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SubmissionExport;

use App\Exports\EnrollmentExport;
use Facade\Ignition\QueryRecorder\Query;

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

    public function prizes()
    {
        return view('prizes');
    }

    public function ptogallery()
    {
        return view('ptogallery');
    }

    public function howto()
    {
        return view('howto');
    }

    public function importExportView()
    {
       return view('import');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new UsersExport('idio'), 'users.xlsx');
    }
     
    public function enrollmentExport(Request $data){
        $cat=$data->get('category');
        return Excel::download(new EnrollmentExport($cat),"$cat Enrollment.xlsx");
    }

    public function submissionExport(Request $data){
        $cat=$data->get('category');
        return Excel::download(new SubmissionExport($cat),"$cat Submission.xlsx");
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
             
        return back();
    }

    public function waiting_approve(){
        return view('waiting_approve');
    }

}
