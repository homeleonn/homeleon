<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController
{
    public function info(User $user)
    {
        dd($user);
    }
}
