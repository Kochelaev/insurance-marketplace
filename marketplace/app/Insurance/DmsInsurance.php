<?php

namespace App\Insurance;

Class DmsInsurance extends Insurance
{
    public function getProduct(): ProductContract
    {
        return new Dms();
    }
}