<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Http\RedirectResponse;
//use Illuminate\Http\Request;


class Admin
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function handle($request, Closure $next)
    {
       $value = config('services.admin.key');

       if($value != $request->route('key')){
           return redirect()->route('home');
       }
       return $next($request);
    }
}
