<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;

class AuthUser extends RoleController
{
    public function home()
    {
        return view('user.home');
    }
}
