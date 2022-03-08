<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;

class Guest extends RoleController
{
    public function home()
    {
        return 'Guest';
    }
}
