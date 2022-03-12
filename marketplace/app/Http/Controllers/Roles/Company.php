<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\RoleController;
use App\Services\CompanyService;
use App\Services\ProductService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

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
        return view('company.home');
    }

    public function products()
    {
        $companyId = $this->userService->getAuthId();
        $products = $this->productService->getProductsByCompanyId($companyId);
        return view('company.products', compact('products'));
    }

    public function productDelete($productId)
    {
        //проверка хозяина
        $ownerId = $this->productService->getProductOwnerId($productId);
        if ($ownerId === $this->userService->getAuthId()) {
            $this->productService->DeleteProduct($productId);
            $error = null;
        }
        else{
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
        //проверка хозяина
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
