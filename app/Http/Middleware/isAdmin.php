<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {// Check if Admin
        if (Auth::user() == null) {
            return redirect('login');
        }

        if (Auth::Guest() || Auth::user()->user_category_id != 1) {
//            abort(403, 'Unauthorized action.');
             return redirect('login');
        }

        return $next($request);
    }
}
