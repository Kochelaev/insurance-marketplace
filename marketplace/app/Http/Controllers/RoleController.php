<?php

namespace App\Http\Controllers;

use App\Services\CompanyService;
use App\Services\Helper;
use App\Services\ProductService;
use App\Services\UserService;


abstract class RoleController extends Controller
{
    protected $companyService;
    protected $productService;
    protected $userService;
    protected $helper;

    public function __construct()
    {
        $this->companyService = new CompanyService;
        $this->productService = new ProductService;
        $this->userService = new UserService;
        $this->helper = new Helper;
    }
    
    public function home()
    {
        return view('home');
    }
}
