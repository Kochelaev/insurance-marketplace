<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
use App\Insurance\Insurance;

class Company extends RoleController
{
    public function home()
    {
        $companyId = $this->userService->getAuthId();
        $profile = $this->userService->getCompanyProfile($companyId);
        return view('company.home', compact('profile'));
    }

    public function profileUpdateForm()
    {
        $companyId = $this->userService->getAuthId();
        $profile = $this->userService->getCompanyProfile($companyId);
        return view('company.profileUpdateForm', compact('profile'));
    }

    public function profileUpdate(Request $request)
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

    public function productCreateSetType()
    {
        $types = $this->helper->getAllTypes();
        return view('company.productsSetType', compact('types'));
    }

    public function productCreateForm($typeId)
    {
        // может потом перенести в сервис?
        $insurance = Insurance::getNewinsuranceByType($typeId);
        $insurance->CreateProductForm();
        
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
