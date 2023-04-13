<?php

namespace App\Insurance;

use App\Models\User;

class Dms implements ProductContract
{
    public function getCreateForm()
    {
        return 'ДМС';
    }

    public function getTarget(): string
    {
        return User::class;
    }

    public function getCoefficientsList(): array
    {
        return [
            'Sex' => ['Коефициенты пола' => Callables::sexCoefficients()],
            'birthdate' => ['Коефициенты возраста' => Callables::ageCoefficients()]
        ];
    }
}
