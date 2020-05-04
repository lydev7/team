<?php

namespace App\Policies;

use App\Position;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PositionPolicy
{
    use HandlesAuthorization;
	
	public function position(User $user)
	{
		return $user->roles()->where('role', 'position')->first();
    }
}
