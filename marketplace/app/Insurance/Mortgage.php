<?php

namespace App\Insurance;

use App\Insurance\BaseInsurance\ApartmentType;
class Mortgage extends ApartmentType implements ProductContract
{
    public function getCreateForm()
    {
        return 'Ипотека';
    }
}
