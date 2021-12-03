<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class SessionToken
{
    public function handle($request, Closure $next)
    {   
        $route = Route::getRoutes()->match($request);
        # Session doesnt exists
        if(!session()->exists('id')) {  
            # Redirect to index
            if ($route->uri != '/') {
                return redirect('/');
            }
            return $next($request);
        # Session exists, verify if the route is index
        } else if ($route->uri == '/'){
            # Redirect to me
            return redirect('/me');
        } else {
            # If is not index, configure rules...
            if ($request->session()->get('rank') <= '5' && $route->uri == '/admin/cms') {
                    return redirect('/');
                }
            return $next($request);
        }
    }
}
