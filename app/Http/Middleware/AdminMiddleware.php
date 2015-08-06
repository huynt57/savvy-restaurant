<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\Redirect;
use Route;
use Auth;

class AdminMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (!Session::has('admin') && !$request->is('admin/login')) {
            return redirect('admin/login');
        
        } else {
            Session::put('admin', 'admin');
            return $next($request);
        }
    }

}
