<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\CompanyService;
use App\Services\Helper;

class CompanyController extends Controller
{
    // TODO: bind this in serviceProvider
    public $companyService;
    public $helper;

    public function __construct(CompanyService $companyService, Helper $helper)
    {
        $this->companyService = $companyService;
        $this->helper = $helper;
    }

    public function allCompanysShow()
    {
        $navMenu = $this->helper->getNavMenu();

        $companys = $this->companyService->getAllCompanys();
        // dd($companys);
        
        return view('companyList', compact('companys'))
            ->with('navMenu', $navMenu);
    }

    public function companyShow($companyId)
    {
        $companys = User::where('company', '!=', null)->paginate(10);
        dd($companyId);
    }
}
