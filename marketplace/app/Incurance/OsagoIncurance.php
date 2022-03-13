<?php

namespace App\Incurance;

Class OsagoIncurance extends Incurance
{
    public function getProduct(): ProductContract
    {
        return new Osago();
    }
}