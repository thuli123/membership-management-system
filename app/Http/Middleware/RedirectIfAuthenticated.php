<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {


                if($guard === 'RegistrationsAdmin'){
                    return redirect()->route('RegistrationsAdmin.home');
                }
                if($guard === 'Assessors'){
                    return redirect()->route('Assessors.home');
                }

                if($guard === 'FinanceTeam'){
                    return redirect()->route('FinanceTeam.home');
                }
                if($guard === 'CEO'){
                    return redirect()->route('CEO.home');
                
                }

                if($guard === 'MemberRegistration'){
                    return redirect()->route('MemberRegistration.home');
                }
                return redirect()->route('user.home');
            }
        }

        return $next($request);
    }
}
