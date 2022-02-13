<?php

namespace App\Services;

use App\Models\User;

Class CompanyService
{
    public function getAllCompanys()
    {
        return User::where('company', '!=', null)->paginate(10);
    }
}