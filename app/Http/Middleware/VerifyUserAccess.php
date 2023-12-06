<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User; // Sesuaikan namespace dengan model User Anda
use Illuminate\Support\Facades\Auth;

class VerifyUserAccess
{
    public function handle(Request $request, Closure $next)
    {
        $requestedUserId = User::findOrFail($request->segment(2));
        $loggedInUserId = Auth::id();

        if ($requestedUserId->id == $loggedInUserId) {
            return $next($request);
        }
        return abort(403, 'Unauthorized access to user profile');
    }
}
