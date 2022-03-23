<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;

class Admin extends RoleController
{
    public function home()
    {
        $companyId = $this->userService->getAuthId();
        $profile = $this->userService->getAdminProfile($companyId);
        return view('admin.home', compact('profile'));        
    }

    public function profileUpdateForm()
    {
        $userId = $this->userService->getAuthId();
        $profile = $this->userService->getAdminProfile($userId);
        return view('admin.profileUpdateForm', compact('profile'));
    }

    public function profileUpdate(Request $request)
    {
        $userId = $this->userService->getAuthId();
        $profile = $this->userService->getAdminProfile($userId);
        $profile->update($request->except('_token'));
        return redirect('home');
    }

    public function users()
    {
        $users = $this->userService->getAllUsers();
        return view('admin.users', compact('users'));
    }

    public function userDelete($userId)
    {
        $this->userService->userDelete($userId);
        return redirect()->back();
    }

    public function usersRestoreForm()
    {
        $users = $this->userService->getTrashUsers();
        return view('admin.usersRestore', compact('users'));
    }

    public function userRestore($userId)
    {
        $this->userService->restoreUser($userId);
        return redirect()->back();
    }

    public function companys()
    {
        $companys = $this->companyService->getAllCompanys();
        return view('admin.companys', compact('companys'));
    }

    public function companyProducts($companyId)
    {
        if (empty($this->companyService->getCompanyById($companyId)))
            return redirect()->back()->withErrors(['msg' => 'ошибка']);
        $products = $this->productService->getProductsByCompanyId($companyId);
        return view('admin.companyProducts', compact('products'));        
    }

    public function companyDelete($companyId)
    {
        $this->productService->deleteProductsByCompanyId($companyId);       
        $this->userService->userDelete($companyId);
        return redirect()->back();
    }

    public function companyRestoreForm()
    {
        $companys = $this->companyService->getTrashCompanys();
        return view('admin.companysRestore' , compact('companys'));
    }

    public function companyRestore($companyId)
    {
        $this->userService->restoreUser($companyId);
        return redirect()->back();
    }

    public function callback()
    {
        return view('admin.callback');
    }

    public function mail()
    {
        return view('admin.mail');
    }
}
