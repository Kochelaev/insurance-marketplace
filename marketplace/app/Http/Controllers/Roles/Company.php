<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\RoleController;
use App\Services\CompanyService;
use App\Services\ProductService;
use App\Services\UserService;
use Illuminate\Http\Request;

class Company extends RoleController
{
    private $companyService;
    private $productService;
    private $userService;

    public function __construct()
    {
        $this->companyService = new CompanyService;
        $this->productService = new ProductService;
        $this->userService = new UserService;
    }

    public function home()
    {
        $companyId = $this->userService->getAuthId();
        $profile = $this->userService->getCompanyProfile($companyId);
        return view('company.home', compact('profile'));
    }

    public function CompanyProfileUpdateForm()
    {
        $companyId = $this->userService->getAuthId();
        $profile = $this->userService->getCompanyProfile($companyId);
        return view('company.profileUpdateForm', compact('profile'));
    }

    public function CompanyProfileUpdate(Request $request)
    {      
        //добавить валидацию и проверку пароля
        $companyId = $this->userService->getAuthId();
        $company = $this->companyService->getCompanyById($companyId);
        $company->update($request->except('_token'));
        return redirect('home');
    }

    public function products()
    {
        $companyId = $this->userService->getAuthId();
        $products = $this->productService->getProductsByCompanyId($companyId);
        return view('company.products', compact('products'));
    }

    public function productDelete($productId)
    {     
        //проверка владельца
        $ownerId = $this->productService->getProductOwnerId($productId);
        if ($ownerId === $this->userService->getAuthId()) {
            $this->productService->DeleteProduct($productId);
            $error = null;
        } else {
            $error = ['msg' => 'недостаточно прав'];
        }
        return redirect()->back()->withErrors($error);
    }

    public function productRestoreForm()
    {
        $companyId = $this->userService->getAuthId();
        $products = $this->productService->getTrashProductByCompanyId($companyId);
        return view('company.productsRestore', compact('products'));
    }

    public function productRestore($productId)
    {      
        //проверка владельца
        $ownerId = $this->productService->getTrashProductOwnerId($productId);
        if ($ownerId === $this->userService->getAuthId()) {
            $this->productService->RestoreProductById($productId);
            $error = null;
        } else {
            $error = ['msg' => 'недостаточно прав'];
        }
        return redirect()->back()->withErrors($error);
    }

    public function orders()
    {
        return view('company.orders');
    }

    public function callback()
    {
        return view('company.callback');
    }
}
