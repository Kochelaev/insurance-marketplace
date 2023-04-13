<?php

namespace App\Insurance;

use App\Models\User;

class Casualty implements ProductContract
{
    public function getCreateForm()
    {
        return 'Несчастный случай';
    }

    public function getTarget(): string
    {
        return User::class;
    }

    public function getCoefficientsList(): array
    {
        return [
            'Sex' => ['Коефициенты пола' => Callables::sexCoefficients()],
            'birthdate' => ['Коефициенты возраста' => Callables::ageCoefficients()],
        ];
    }
}
