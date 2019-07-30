<?php

namespace App\Http\Middleware;

use Closure;


class CheckAge
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
        info($request->input('age'));
        if(!$request->has('age')){
            return redirect('api/auth/test/home');
        }
        if($request->input('age') < 18){
            return redirect('api/auth/test/home');
        }
        return $next($request);
        
        

        
    }
}
