<?php

namespace App\Http\Controllers\MemberRegistration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MemberRegistration;
use Illuminate\Support\Facades\Auth;

class MemberRegistrationController extends Controller
{

    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $MemberRegistration = new MemberRegistration();
        $MemberRegistration->name = $request->name;
        $MemberRegistration->email = $request->email;
        $MemberRegistration->password = \Hash::make($request->password);
        $save = $MemberRegistration->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
}

function check(Request $request){
    //Validate inputs
    $request->validate([
       'email'=>'required|email|exists:users,email',
       'password'=>'required|min:5|max:30'
    ],[
        'email.exists'=>'This email is not exists on users table'
    ]);



    $creds = $request->only('email','password');
    if(Auth::guard('web')->attempt($creds)){

        return redirect()->route('user.home');
    }else{

      return redirect()->route('user.login')->with('fail','Incorrect credentials');

    }

    }


function logout(){


    Auth::guard('web')->logout();
    return redirect('/');


}




}









