<?php
  
namespace App\Exports;
  
use App\Models\User;
use App\Models\Enrollment;
use App\Models\submission;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

  
class SubmissionExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return User::all();
    // }
       
        public function __construct(String $val)
        {
            $this->value=$val;
        }

    public function view(): View
    {
        return view('submitDownload', [
            'users'=>submission::
            join('enrollments',
            function($join)
            {
                $join->on([['submissions.cmp','=','enrollments.cpm'],['submissions.themeCAT','=','enrollments.theme_category']]);


            })->
            where('themeCAT','=',$this->value)->get(),'category'=>$this->value]);
    }
}