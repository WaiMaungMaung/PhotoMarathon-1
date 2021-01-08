<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Helper as Helper;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $members=DB::select('select * from users', [1]);
        // return view('admin_view',['members'=>$members]);

        $search =  $request->input('q');
        if($search!=""){
            $users = User::where(function ($query) use ($search){
                $query->where('name', 'like', '%'.$search.'%')
                    ->orWhere('email', 'like', '%'.$search.'%')
                    ->orWhere('nrc','like','%'.$search.'%')
                    ->orWhere('Status','=',$search)
                    ->orWhere('payment_type','=',$search)
                    ->Where('access','=',null);
            })
            ->paginate(10);  
            $users->appends(['q' => $search]);
        }
        else{
            $users = User::where('access','=',null)->paginate(10);
        }
        return view('admin_view',['data'=>$users]);

        // return View('admin_view')->with('data',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    protected function create(array $data)
    {
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'nrc' => 'required|string|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            

        ]);
       
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nrc'=> $request['nrc-box']."/".$request['nrc-code'].$request['nrc-type'].$request['nrc'],
            'password' => Hash::make($request->password),
            'access'=> $request->access,
            

        ]);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(String $id)
    {
     $user1= User::findOrFail($id);
     return view('edit')->with('data', $user1);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    
    public function update(String $id)
    {
        $users=DB::table('users')->orderBy('cmp', 'desc')->first();
        if($users != null){            
            $cmp = $users->cmp;
        }else{
            $cmp = null;
        }

        $contact = User::find($id);
        $contact->status = "Approved";
        if($contact->cmp==null)
        $contact->cmp= Helper::getCMPID($cmp);
        
        $data = array('user_cmp'=>$contact->cmp,
                    'user_name'=>$contact->name,
        );
       Mail::send('approved_mail', $data, function($message) {
          $message->to(Auth::user()->email, 'Canon Photo Marathon')->subject
             ('Approved!');
          $message->from('waimaungmaung@myanmargoldenrock.com','Canon Photo Marathon');
       });
        
        $contact->save();

        return redirect()->back()->withInput();;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $id)
    {
        $User_del = User::find($id);

    $User_del->delete();
    return redirect('admin_view');

    }
}
