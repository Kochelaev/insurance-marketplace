<?php

namespace App\Services;

use App\Models\User;

Class UserService
{
    public function getAuthId()
    {
        return auth()->user()->id;
    }    
}