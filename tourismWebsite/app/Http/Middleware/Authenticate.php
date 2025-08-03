<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        //return $request->expectsJson() ? null : route('login');
            // Check if the request expects JSON
        if ($request->expectsJson()) {
            return null;
        }

        // Redirect to OpenAdmin login
        return '/admin/auth/login';
    }
}
