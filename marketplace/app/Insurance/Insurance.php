<?php

namespace App\Insurance;

use App\Models\Type;

abstract class Insurance
{
    abstract public function getProduct(): ProductContract;

    public function CreateProductForm()
    {
        $product = $this->getProduct();
        return $product->getCreateForm();
    }

    public static function getNewInsuranceByType($typeId)
    {
        $type = Type::find($typeId)->type;
        if ($type === null)
            return redirect()->back()->withErrors(
                ['msg' => 'Данный тип страхования недоступен']
            );
        switch ($type) {
            case 'ОСАГО':
                $insurance = OsagoInsurance::class;
                break;
            case 'КАСКО':
                $insurance = CascoInsurance::class;
                break;
            case 'Квартира':
                $insurance = AppartmentInsurance::class;
                break;
            case 'Ответственность':
                $insurance = Responsibility::class;
                break;
            case 'Ипотека':
                $insurance = MortgageInsurance::class;
                break;
            case 'ОМС':
                $insurance = OmsInsurance::class;
                break;
            case 'ДМС':
                $insurance = DmsInsurance::class;
                break;
            case 'Несчастный случай':
                $insurance = CasualtyInsurance::class;
                break;
        }
        return new $insurance();
    }
}
