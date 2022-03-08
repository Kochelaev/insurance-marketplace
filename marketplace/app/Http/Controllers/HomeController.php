<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = auth()->user()->role;
        switch ($role) {
            case 'A':
                $home = 'admin.home';
                break;
            case 'U':
                $home = 'user.home';
                break;
            case 'C':
                $home = 'company.home';
                break;
            default:
                $home = 'user.home';
                break;
        }
        return redirect()->route($home);
    }
}
