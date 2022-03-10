<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\CompanyService;
use App\Services\ProductService;
use App\Services\Helper;

class CompanyController extends Controller
{
    // TODO: bind this in serviceProvider
    public $companyService;
    public $productService;
    public $helper;

    public function __construct()
    {
        $this->companyService = new CompanyService();
        $this->productService = new ProductService();
        $this->helper = new helper();
    }

    public function allCompanysShow()
    {
        $navMenu = $this->helper->getNavMenu();

        $companys = $this->companyService->getAllCompanys();
        return view('companyList', compact('companys'))
            ->with('navMenu', $navMenu);
    }

    public function companyShow($companyId)
    {
        $company = $this->companyService->getCompanyById($companyId);
        $products = $this->productService->getProductsByCompany($companyId);
        $navMenu = $this->helper->getNavMenu();
        return view('companyShow', compact('company', 'products'))
            ->with('navMenu', $navMenu);
    }
}
