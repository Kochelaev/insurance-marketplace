<?php

namespace App\Insurance;

use App\Models\Auto;

class Casco implements ProductContract
{
    public function getCreateForm()
    {
        return 'КАСКО';
    }

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
