<?php
  
namespace App\Exports;
  
use App\Models\User;
use App\Models\Enrollment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

  
class UsersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return User::all();
    // }
       public String $value;
        public function __construct(String $val)
        {
            $this->value=$val;
        }

    public function view(): View
    {
        return view('users', [
            // 'users' => User::where('name','=',$this->value)->get()
            'users'=>User::all()
        ]);
    }
}