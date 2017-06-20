<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLogin 
{
	public function handle($request , Closure $next, $guard = null)
	{
		return $next($request);
	}
}