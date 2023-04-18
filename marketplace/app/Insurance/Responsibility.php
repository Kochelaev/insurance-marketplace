<?php

namespace App\Insurance;

use App\Insurance\BaseInsurance\ApartmentType;

class Responsibility extends ApartmentType implements ProductContract
{
    public function getCreateForm()
    {
        return 'Ответственность';
    }
}
