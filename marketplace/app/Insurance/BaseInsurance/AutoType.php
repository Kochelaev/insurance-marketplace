<?php

namespace App\Insurance\BaseInsurance;

use App\Models\Auto;

abstract class AutoType
{
    public function getTarget(): string
    {
        return Auto::class;
    }

    public function getCoefficientsList(): array
    {
        return [
            'power' => 'Коэфициент мощности'
        ];
    }
}