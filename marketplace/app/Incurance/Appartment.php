<?php

namespace App\Incurance;

Class Appartment implements ProductContract
{
    public function getCreateForm()
    {
        return 'appartment';
    }
}