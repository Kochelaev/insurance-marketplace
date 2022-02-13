<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CompanyController extends Controller
{
    public function allCompanyShow()
    {
        $companys = User::where('company', '!=', null)->paginate(10);
        dd($companys);
    }    
}
