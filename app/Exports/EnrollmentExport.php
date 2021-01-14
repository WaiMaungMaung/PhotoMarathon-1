<?php
  
namespace App\Exports;
  
use App\Models\User;
use App\Models\Enrollment;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

  
class EnrollmentExport implements FromView
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
        return view('enrollDownload', [
            // 'users' => User::where('name','=',$this->value)->get()
            'users'=>Enrollment::
            join('users','enrollments.cpm','=','users.cmp')
            ->where('theme_category','=',$this->value)->get()
        ,'category'=>$this->value]);
    }
}