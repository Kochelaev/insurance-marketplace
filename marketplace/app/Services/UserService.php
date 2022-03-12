<?php

namespace App\Services;

use App\Models\User;

Class UserService
{
    public function getAuthId()
    {
        return auth()->user()->id;
    }

    public function getCompanyProfile($userId)
    {
        return User::where('company', '!=', null)->find($userId);
    }
}