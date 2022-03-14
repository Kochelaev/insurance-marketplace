<?php

namespace App\Insurance;

Class OmsInsurance extends Insurance
{
    public function getProduct(): ProductContract
    {
        return new Oms();
    }
}