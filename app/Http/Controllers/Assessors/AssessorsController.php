<?php

namespace App\Http\Controllers\Assessors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Assessors;
use Illuminate\Support\Facades\Auth;

class AssessorsController extends Controller
{
    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:assessors,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in admins table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('Assessors')->attempt($creds) ){
            return redirect()->route('Assessors.home');
        }else{
            return redirect()->route('Assessors.login')->with('fail','Incorrect credentials');
        }
   }

   function logout(){
       Auth::guard('Assessors')->logout();
       return redirect('/');
   }
}
