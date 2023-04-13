<?php

namespace App\Insurance;

class ResponsibilityInsurance extends Insurance
{
    public function getProduct(): ProductContract
    {
        return new Responsibility();
    }
}
