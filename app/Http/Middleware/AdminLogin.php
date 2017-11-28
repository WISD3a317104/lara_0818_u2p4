<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        //echo session('admin');
        if (!session('admin')){
            return redirect('admin/index');
            
        }
        else{
            echo session('admin');
              
        }
         return $next($request);
        
        
    }
}
