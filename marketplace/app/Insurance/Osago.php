<?php

namespace App\Insurance;

use App\Insurance\BaseInsurance\AutoType;

class Osago extends AutoType implements ProductContract
{
    public function getCreateForm()
    {
        return 'ОСАГО';
    }
}
