<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function view(User $user, User $target){
        return true;
        return $user->is($target) || $user->is_admin;
    }

    public function create(User $user){
        //
    }

    public function update(User $user, User $target){
        //
    }

    public function delete(User $user, User $target){
        //
    }
}
