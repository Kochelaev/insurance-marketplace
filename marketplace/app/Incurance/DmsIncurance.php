<?php

namespace App\Incurance;

Class DmsIncurance extends Incurance
{
    public function getProduct(): ProductContract
    {
        return new Dms();
    }
}