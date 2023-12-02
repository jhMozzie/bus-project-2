<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $expectedUserType): Response
    {
        $userType = $request->user()->user_type_id;

        if ($userType != $expectedUserType) {
            return redirect('dashboard');
        }

        return $next($request);
    }
}
