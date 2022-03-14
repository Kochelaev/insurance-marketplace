<?php

namespace App\Insurance;

Class ResponsibilityInsurance extends Insurance
{
    public function getProduct(): ProductContract
    {
        return new Responsibility();
    }
}