<?php

namespace App\Insurance;

Class MortgageInsurance extends Insurance
{
    public function getProduct(): ProductContract
    {
        return new Mortgage();
    }
}