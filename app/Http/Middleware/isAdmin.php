<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class isAdmin
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
      if(Auth::Guest()){
          abort(403, 'Unauthorized action.');
      }else{
          // Check if Admin
          if(Auth::user()->user_category_id != 1){
              abort(403, 'Unauthorized action.');
          }
      }
      return $next($request);
    }
}
