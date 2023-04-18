<?php

namespace App\Insurance;

use App\Insurance\BaseInsurance\ApartmentType;

class Appartment extends ApartmentType implements ProductContract
{
    public function getCreateForm()
    {
        return 'Квартира';
    }
  
}
