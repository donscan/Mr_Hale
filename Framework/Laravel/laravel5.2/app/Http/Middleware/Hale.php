<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Hale
{
	public function handle($request, Closure $next, $guart = null)
	{
		if(!session('user'))
		{
			return redirect('user/login');
		}
		return $next($request);
	}
}