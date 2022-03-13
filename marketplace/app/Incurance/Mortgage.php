<?php

namespace App\Incurance;

Class Mortgage implements ProductContract
{
    public function getCreateForm()
    {
        return 'Mortgage';
    }
}
