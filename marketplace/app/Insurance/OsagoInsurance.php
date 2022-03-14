<?php

namespace App\Insurance;

Class OsagoInsurance extends Insurance
{
    public function getProduct(): ProductContract
    {
        return new Osago();
    }
}