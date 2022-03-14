<?php

namespace App\Insurance;

Class CasualtyInsurance extends Insurance
{
    public function getProduct(): ProductContract
    {
        return new Casualty();
    }
}