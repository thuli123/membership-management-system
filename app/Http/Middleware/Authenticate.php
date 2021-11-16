<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

           
            if($request->routeIs('RegistrationsAdmin.*')){
                return route('RegistrationsAdmin.login');
            }

            if($request->routeIs('Assessors.*')){
                return route('Assessors.login');
            }

            if($request->routeIs('FinanceTeam.*')){
                return route('FinanceTeam.login');
            }

            if($request->routeIs('CEO.*')){
                return route('CEO.login');
            }
            return route('user.login');
        }
    }
}
