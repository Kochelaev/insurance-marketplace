<?php

namespace App\Incurance;

Class MortgageIncurance extends Incurance
{
    public function getProduct(): ProductContract
    {
        return new Mortgage();
    }
}