<?php

namespace App\Incurance;

Class CascoIncurance extends Incurance
{
    public function getProduct(): ProductContract
    {
        return new Casco();
    }
}