<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RolesPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // try {
        $userRole = auth()->user()->role;
        $currentRouteName = Route::currentRouteName();
        $admin = ['category.index', 'category.store', 'category.destroy', 'category.create', 'type.index', 'type.store', 'type.destroy', 'type.create'];

        if (in_array($currentRouteName, $admin) && $userRole !== 'admin') {
            abort(403, 'Unauthorized Access');
        } else {
            return $next($request);
        }

        return $next($request);
        // } catch (\Throwable $th) {
        //     abort(403, 'Unauthorized Access');
        // }
    }
}
