<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class RoleController extends Controller
{
    public function home()
    {
        return view('home');
    }
}
