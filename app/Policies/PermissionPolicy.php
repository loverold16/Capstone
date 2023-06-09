<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Spatie\Permission\Models\Permission;

class PermissionPolicy
{
    /**
     * Determine whether the user can view any models.
     * Spatie\Permission\Models\Permission;
     */
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['super-admin', 'admin' , 'client' ]);
    }

    /**
     * Determine whether the user can create models.
     * Spatie\Permission\Models\Permission;
     */
    public function create(User $user): bool
    {
        return $user->hasAnyRole(['super-admin', 'admin']);
    }

    /**
     * Determine whether the user can update the model.
     * Spatie\Permission\Models\Permission;
     */
    public function update(User $user, Permission $permission): bool
    {
        return $user->hasAnyRole(['super-admin',]);
    }

    /**
     * Determine whether the user can delete the model.
     * Spatie\Permission\Models\Permission;
     */
    public function delete(User $user, Permission $permission): bool
    {
        return $user->hasAnyRole(['super-admin',]);
    }
}
