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

    public function orders()
    {
        return view('user.orders');
    }

    public function autos()
    {
        return view('user.autos');
    }

    public function houses()
    {
        return view('user.houses');
    }

    public function callback()
    {
        return view('user.callback');
    }
}
