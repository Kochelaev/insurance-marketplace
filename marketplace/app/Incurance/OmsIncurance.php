<?php

namespace App\Incurance;

Class OmsIncurance extends Incurance
{
    public function getProduct(): ProductContract
    {
        return new Oms();
    }
}