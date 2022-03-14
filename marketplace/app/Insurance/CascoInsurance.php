<?php

namespace App\Insurance;

Class CascoInsurance extends Insurance
{
    public function getProduct(): ProductContract
    {
        return new Casco();
    }
}