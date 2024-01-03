<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->age && $request->age<18 && !$request->age)
        return redirect('noaccess');
        echo "hello i am global";
        return $next($request);
    }

    public function addnum(string $num1, string $num2){
        return $num1 + $num2;
    }
}
