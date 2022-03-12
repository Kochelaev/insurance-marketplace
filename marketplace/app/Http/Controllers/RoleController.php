<?php

namespace App\Http\Controllers;

use App\Services\CompanyService;
use App\Services\ProductService;
use App\Services\UserService;
use Illuminate\Http\Request;


abstract class RoleController extends Controller
{
    protected $companyService;
    protected $productService;
    protected $userService;

    public function __construct()
    {
        $this->companyService = new CompanyService;
        $this->productService = new ProductService;
        $this->userService = new UserService;
    }
    
    public function home()
    {
        return view('home');
    }
}
