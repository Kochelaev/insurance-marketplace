<?php

namespace App\Incurance;

Class Casualty implements ProductContract
{
    public function getCreateForm()
    {
        return 'Casualty';
    }
}