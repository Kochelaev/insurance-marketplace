<?php

namespace App\Incurance;

use App\Models\Type;

abstract class Incurance
{
    abstract public function getProduct(): ProductContract;

    public function CreateProductForm()
    {
        $product = $this->getProduct();
        return $product->getCreateForm();
    }

    public static function getNewIncuranceByType($typeId)
    {
        $type = Type::find($typeId)->type;
        if ($type === null)
            return redirect()->back()->withErrors(
                ['msg' => 'Данный тип страхования недоступент']
            );
        switch ($type) {
            case 'ОСАГО':
                $incurance = OsagoIncurance::class;
                break;
            case 'КАСКО':
                $incurance = CascoIncurance::class;
                break;
            case 'Квартира':
                $incurance = CascoIncurance::class;
                break;
            case 'Ответственность':
                $incurance = CascoIncurance::class;
                break;
            case 'Ипотека':
                $incurance = CascoIncurance::class;
                break;
            case 'ОМС':
                $incurance = CascoIncurance::class;
                break;
            case 'ДМС':
                $incurance = CascoIncurance::class;
                break;
            case 'Несчастный случай':
                $incurance = CascoIncurance::class;
                break;
        }
        return new $incurance();
    }
}
