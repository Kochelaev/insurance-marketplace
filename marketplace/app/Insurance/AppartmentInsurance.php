<?php

namespace App\Insurance;

Class AppartmentInsurance extends Insurance
{
    public function getProduct(): ProductContract
    {
        return new Appartment();
    }
}