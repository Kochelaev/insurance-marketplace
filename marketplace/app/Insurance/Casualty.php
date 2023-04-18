<?php

namespace App\Insurance;

use App\Insurance\BaseInsurance\UserType;

class Casualty extends UserType implements ProductContract
{
    public function getCreateForm()
    {
        return 'Несчастный случай';
    }
}
