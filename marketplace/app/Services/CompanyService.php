<?php

namespace App\Services;

use App\Models\User;

Class CompanyService
{
    public function getAllCompanys()
    {
        return User::where('company', '!=', null)->paginate(10);
    }

    public function getCompanyById($id)
    {
        return User::where('role', 'c')->find($id);
    }

    public function getTrashCompanys()
    {
        return User::onlyTrashed()->where('role', 'C')->paginate(10);
    }    
}