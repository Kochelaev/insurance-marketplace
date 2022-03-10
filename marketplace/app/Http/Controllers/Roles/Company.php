<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;

class Company extends RoleController
{
    public function home()
    {
        return view('company.home');
    }

    public function products()
    {
        return view('company.products');
    }

    public function orders()
    {
        return view('company.orders');
    }

    public function callback()
    {
        return view('company.callback');
    }
}
