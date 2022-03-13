<?php

namespace App\Incurance;

Class CasualtyIncurance extends Incurance
{
    public function getProduct(): ProductContract
    {
        return new Casualty();
    }
}