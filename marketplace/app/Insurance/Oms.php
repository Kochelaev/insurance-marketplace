<?php

namespace App\Insurance;

use App\Insurance\BaseInsurance\UserType;
class Oms extends UserType implements ProductContract
{
    public function getCreateForm()
    {
        return 'ОМС';
    }
}
