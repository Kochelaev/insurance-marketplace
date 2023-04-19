<?php

namespace App\Insurance\BaseInsurance;

use App\Models\User;
use App\Insurance\Helpers\Coefficients;

abstract class UserType
{
    public function getTarget(): string
    {
        return User::class;
    }

    public function getCoefficientsList(): array
    {
        return [
            'Sex' => ['Коеффициенты пола:' => Coefficients::sexCoefficients()],
            'birthdate' => ['Коеффициенты возраста:' => Coefficients::ageCoefficients()],
        ];
    }
}