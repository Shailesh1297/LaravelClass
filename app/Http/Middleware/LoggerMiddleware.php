<?php

namespace App\Http\Middleware;

use Closure;

class LoggerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data['email']= $request->session()->get('email');
        $data['password']=$request->session()->get('password');

       if($data['email']!='' && $data['password']!='')
        {
           return redirect('/home');
        }
           
            
           return $next($request);
    }
}
