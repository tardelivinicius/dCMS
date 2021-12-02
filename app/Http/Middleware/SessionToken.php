<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class SessionToken
{
    public function handle($request, Closure $next)
    {   
        $route = Route::getRoutes()->match($request);
        if(!session()->exists('id')) {  
            if ($route->uri != '/') {
                return redirect('/');
            }
            return $next($request);
        } else {
            $this->userId = $request->session()->get('id');
            if ($request->session()->get('rank') <= '5' && $route->uri == '/admin/cms') {
                    return redirect('/');
                }
            return $next($request);
        }
    }
}
