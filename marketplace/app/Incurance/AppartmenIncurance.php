<?php

namespace App\Incurance;

Class AppartmentIncurance extends Incurance
{
    public function getProduct(): ProductContract
    {
        return new Appartment();
    }
}