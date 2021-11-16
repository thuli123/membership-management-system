<?php

namespace App\Http\Controllers\RegistrationsAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\RegistrationsAdmin;
use Illuminate\Support\Facades\Auth;

class RegistrationsAdminController extends Controller
{
    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:registrations_admins,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in admins table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('RegistrationsAdmin')->attempt($creds) ){
            return redirect()->route('RegistrationsAdmin.home');
        }else{
            return redirect()->route('RegistrationsAdmin.login')->with('fail','Incorrect credentials');
        }
   }

   function logout(){
       Auth::guard('RegistrationsAdmin')->logout();
       return redirect('/');
   }
}

