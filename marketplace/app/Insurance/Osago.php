<?php

namespace App\Insurance;

use App\Models\Auto;

class Osago implements ProductContract
{

    public function getCreateForm()
    {
        return 'ОСАГО';
    }

    public function getTarget() : string
    {
        return Auto::class;
    }
    
    public function getCoefficientsList() : array
    {
        return [
            'power' => 'Коэфициент мощности'
        ];
    }
}
