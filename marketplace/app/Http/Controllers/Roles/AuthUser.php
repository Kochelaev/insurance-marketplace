<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;

class AuthUser extends RoleController
{
    public function home()
    {
        $userId = $this->userService->getAuthId();
        $profile = $this->userService->getUserProfile($userId);
        return view('user.home', compact('profile'));
    }

    public function profileUpdateForm()
    {
        $userId = $this->userService->getAuthId();
        $profile = $this->userService->getUserProfile($userId);
        return view('user.profileUpdateForm', compact('profile'));
    }

    public function profileUpdate(Request $request)
    {
        // TODO: добавить валидацию и проверку пароля
        // TODO: Перенеси апдейт в юзер сервис
        $userId = $this->userService->getAuthId();
        $user = $this->userService->getUserProfile($userId);
        $user->update($request->except('_token'));
        return redirect('home');
    }

    public function orders()
    {
        return view('user.orders');
    }

    public function autos()
    {
        return view('user.autos');
    }

    public function houses()
    {
        return view('user.houses');
    }

    public function callback()
    {
        return view('user.callback');
    }
}
