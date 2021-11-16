<?php

namespace App\Http\Controllers\CEO;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CEO;
use Illuminate\Support\Facades\Auth;

class CEOController extends Controller
{
    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:c_e_o_s,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in admins table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('CEO')->attempt($creds) ){
            return redirect()->route('CEO.home');
        }else{
            return redirect()->route('CEO.login')->with('fail','Incorrect credentials');
        }
   }

   function logout(){
       Auth::guard('CEO')->logout();
       return redirect('/');
   }
}
