<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        {
            if(auth()->user()->type == $userType){
                return $next($request);
            }

            if (auth()->user()->type == 'admin') {

                return redirect()->route('admindashboard.index'); // Redirect to admin home

            }
             elseif(auth()->user()->type == 0) {
                return redirect(RouteServiceProvider::HOME); // Redirect to regular home
            }

            return response()->json(['You do not have permission to access for this page.']);
            /* return response()->view('errors.check-permission'); */
        }
    }
}
