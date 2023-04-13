<?php

namespace App\Insurance;

use App\Models\Apartment;

class Mortgage implements ProductContract
{
    public function getCreateForm()
    {
        return 'Ипотека';
    }

    public function getTarget(): string
    {
        return Apartment::class;
    }

    public function getCoefficientsList(): array
    {
        return [
            'area' => 'Коэфициент площади'
        ];
    }
}
