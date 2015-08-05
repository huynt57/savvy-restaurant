<?php namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Support\Facades\Redirect;
use Route;

class AdminMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
                $action = Route::currentRouteAction();
		if (!Session::has('admin') && $action != "App\Http\Controllers\AdminController@login")
		{
                    return redirect('admin/login');
		}

		return $next($request);
	}

}
