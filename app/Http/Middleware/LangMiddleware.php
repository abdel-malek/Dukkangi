<?php

namespace App\Http\Middleware;

use Closure;
use App\Utils;
use App;

class LangMiddleware
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
        //check utils table for lang
        // if lang is set then add it to the session 

        $utility = Utils::get()->first();
        if (isset($utility) && $utility->count() != 0){
            if (isset($utility->lang)){
                if (session('lang') == null){
                    session(['lang' => $utility->lang]);
                    App::setLocale($utility->lang);
                }
            }
        } 
        return $next($request);
    }
}
