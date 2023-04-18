<?php

namespace App\Insurance;

use App\Insurance\BaseInsurance\UserType;

class Dms extends UserType implements ProductContract
{
    public function getCreateForm()
    {
        return 'ДМС';
    }
}
