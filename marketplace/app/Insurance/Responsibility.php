<?php

namespace App\Insurance;

use App\Models\Apartment;

class Responsibility implements ProductContract
{
    public function getCreateForm()
    {
        return 'Ответственность';
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
