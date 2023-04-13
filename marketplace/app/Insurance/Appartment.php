<?php

namespace App\Insurance;

use App\Models\Apartment;

class Appartment implements ProductContract
{
    public function getCreateForm()
    {
        return 'Квартира';
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
