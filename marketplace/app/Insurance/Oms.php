<?php

namespace App\Insurance;

use App\Models\User;

class Oms implements ProductContract
{
    public function getCreateForm()
    {
        return 'ОМС';
    }

    public function getTarget(): string
    {
        return User::class;
    }

    public function getCoefficientsList(): array
    {
        return [
            'Sex' => ['callable' => Callables::sexCoefficients()],
            'birthdate' => ['callable' => Callables::ageCoefficients()],
        ];
    }
}
