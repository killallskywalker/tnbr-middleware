<?php

namespace Killallskywalker\TnbrMiddleware\Traits;

use Illuminate\Support\Facades\Auth;

trait HasRoleAndPermission
{
    /**
     * Check if user has a given role.
     *
     * @param string $role
     * @return bool
     */
    public function hasRole(string $role): bool
    {
        return in_array($role, $this->roles);
    }

    /**
     * Check if user has any of the given roles.
     *
     * @param array $roles
     * @return bool
     */
    public function hasAnyRole(array $roles): bool
    {
        return !empty(array_intersect($this->roles, $roles));
    }

    /**
     * Check if user has any of the given permissions.
     *
     * @param array $roles
     * @return bool
     */
    public function hasPermission(string $permission): bool
    {
        if($this->permission){
            return in_array($permission, $this->permissions);
        }

        return false;
    }
}
