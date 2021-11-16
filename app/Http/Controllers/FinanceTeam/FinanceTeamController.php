<?php

namespace App\Http\Controllers\FinanceTeam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\FinanceTeam;
use Illuminate\Support\Facades\Auth;

class FinanceTeamController extends Controller
{
    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:finance_teams,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in admins table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('FinanceTeam')->attempt($creds) ){
            return redirect()->route('FinanceTeam.home');
        }else{
            return redirect()->route('FinanceTeam.login')->with('fail','Incorrect credentials');
        }
   }

   function logout(){
       Auth::guard('FinanceTeam')->logout();
       return redirect('/');
   }
}
