<?php

namespace App\Insurance;

class OsagoInsurance extends Insurance
{

    /**
     * Return Insurance
     *
     * @return App\Insurance\ProductContract
     */
    public function getProduct(): ProductContract
    {
        return new Osago();
    }
}
