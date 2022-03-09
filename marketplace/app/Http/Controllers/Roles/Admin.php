<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;

class Admin extends RoleController
{
    public function home()
    {
        return view('admin.home');
    }

    public function users()
    {
        return view('admin.users');
    }

    public function companys()
    {
        return view('admin.companys');
    }

    public function callback()
    {
        return view('admin.callback');
    }

    public function mail()
    {
        return view('admin.mail');
    }
}
