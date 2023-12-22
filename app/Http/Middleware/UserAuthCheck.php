<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        if(!Session()->has('userloginId')){
            return redirect('/userlogin')->with('fail','You have to login first.');
        }else
        {
            return $next($request);
        }

        // $user=$request->session()->get('userloginId');
        // if(isset($user))
        // {
        //     return $next($request);
        // }
        // else
        // {
        //     echo "<script>alert('Please do login first')
        //     window.location.href='/userlogin';
        //     </script>";
        // }
    }
}
