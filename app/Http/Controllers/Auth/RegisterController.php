<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Helper as Helper;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data['new_nrc']=$data['nrc-box']."/".$data['nrc-code'].$data['nrc-type'].$data['nrc'];
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nrc-box' => ['required'],
            'nrc-code' => ['required'],
            'nrc-type' => ['required'],
            'nrc' =>['required','string','min:6'],
            'new_nrc' => ['required','string', 'max:255', 'unique:users,nrc'],
            'dob' => ['required'],
            'ph-no'=>['required'],
            't-shirt-size'=>['required'],
            'payment-type'=>['required'],
            'image' => ['required']
        ]);
    }   

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $users=DB::table('users')->latest()->first();
        if($users != null){            
            $cmp = $users->cmp;
        }else{
            $cmp = null;
        }
        $status="pending";        
        if(request()->hasFile('image')){
            $now=time();
            $img=request()->file('image')->getClientOriginalName();
            request()->file('image')->move(public_path('payslips'),$now.$img,'');            
        }
        
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nrc'=> $data['nrc-box']."/".$data['nrc-code'].$data['nrc-type'].$data['nrc'],
            'password' => Hash::make($data['password']),
            'dob'=>date_create($data['dob']),        
            'cmp'=>Helper::getCMPID($cmp),
            'ph-no'=>$data['ph-no'],
            'location'=>$data['location'],
            't-shirt-size'=>$data['t-shirt-size'],
            'payment-type'=>$data['payment-type'],
            'status'=>$status,
            'image' => $now.$img,            
        ]);        
        return $user;
    }
    
}
