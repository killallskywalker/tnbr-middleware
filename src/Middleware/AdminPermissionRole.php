<?php

namespace Killallskywalker\TnbrMiddleware\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;

class AdminPermissionRole
{
    public function handle($request, Closure $next, $permissionsAndRole)
    {
        $user = $request->user();

        $permissionsAndRoles = is_array($permissionsAndRole)
        ? $permissionsAndRole
        : explode('|', $permissionsAndRole);

        if(!array_intersect($user->roles, $permissionsAndRoles) && !array_intersect($user->permissions, $permissionsAndRoles)){
            throw new AuthorizationException('You are not authorized to perform this action.');
        }

        return $next($request);
    }
}
