<?php

namespace App\Insurance;

class OmsInsurance extends Insurance
{
    public function getProduct(): ProductContract
    {
        return new Oms();
    }
}
