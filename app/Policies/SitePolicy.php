<?php

namespace App\Policies;

use App\Models\Site;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Helpers\PermissionPolicy;
use App\Helpers\MaxSOP;

class SitePolicy
{
    use HandlesAuthorization, PermissionPolicy;

    private $menuID;

    public function __construct() {
//        $this->menuID = MaxSOP::getMenu('site')->id;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return in_array($user->is_admin, [
            true,
        ]);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Model\Site  $site
     * @return mixed
     */
    public function view(User $user, Site $site)
    {

        // return $this->hasPermission($this->menuID, 'show');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->is_admin, [
            true,
        ]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Model\Site  $site
     * @return mixed
     */
    public function update(User $user, Site $site)
    {
        return in_array($user->is_admin, [
            true,
        ]);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Model\Site  $site
     * @return mixed
     */
    public function delete(User $user, Site $site)
    {
        return $this->hasPermission($this->menuID, 'destroy');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Model\Site  $site
     * @return mixed
     */
    public function restore(User $user, Site $site)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     *
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Model\Site  $site
     * @return mixed
     */
    public function forceDelete(User $user, Site $site)
    {
        //
    }
}
