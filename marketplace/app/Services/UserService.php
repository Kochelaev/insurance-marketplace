<?php

namespace App\Services;

use App\Models\User;
use Facade\FlareClient\Truncation\TruncationStrategy;

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

    public function getAdminProfile($userId)
    {
        return User::where('role', 'A')->find($userId);
    }

    public function getAllUsers()
    {
        return User::where('role', 'U')->paginate(10);
    }

    public function userDelete($userId)
    {
        User::find($userId)->delete();
    }

    public function getTrashUsers()
    {
        return User::onlyTrashed()->where('Role', 'U') ->paginate(10);
    }

    public function restoreUser($userId)
    {
        $user = User::onlyTrashed()
        ->find($userId);
        $user->restore();
    }
}
