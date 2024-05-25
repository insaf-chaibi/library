<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckAdminRole
{
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
        if (Auth::check() && Auth::user()->role == $role){
            return $next($request);
        }
        if (!Auth::check()) {
            Log::info('User is not authenticated.');
            abort(403, 'Unauthorized action.');
        }

        $user = Auth::user();

        if (!$user->hasRole($role)) {
            Log::info('User does not have the required role.', ['role' => $role, 'user_id' => $user->id]);

        }


    }
}
