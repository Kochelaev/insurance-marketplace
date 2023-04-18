<?php

namespace App\Insurance\BaseInsurance;

use App\Models\Apartment as ApartmentModel;

abstract class ApartmentType
{
    public function getTarget(): string
    {
        return ApartmentModel::class;
    }

    public function getCoefficientsList(): array
    {
        return [
            'area' => 'Коэфициент площади'
        ];
    }
}
