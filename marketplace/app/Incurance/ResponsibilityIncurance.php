<?php

namespace App\Incurance;

Class ResponsibilityIncurance extends Incurance
{
    public function getProduct(): ProductContract
    {
        return new Responsibility();
    }
}