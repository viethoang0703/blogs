<?php

namespace App\Http\Middleware;

use Closure;

class OldMiddleware {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		if (!preg_match("/^[A-Za-z\s-_]+$/", $request->input('news_tittle'))) {
			return redirect('admin');
		}
		return $next($request);
	}
}
