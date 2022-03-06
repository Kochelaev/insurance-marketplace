<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;

class Goest extends RoleController
{
    public function home()
    {
        return 'Guest';
    }
}
