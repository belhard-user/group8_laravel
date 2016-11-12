<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CarPolice
{
    use HandlesAuthorization;

    public function uploadPhoto(User $user, $car)
    {
        return $user->isOwner($car);
    }
}
