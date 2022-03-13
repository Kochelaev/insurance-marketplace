<?php

namespace App\Incurance;

Class Responsibility implements ProductContract
{
    public function getCreateForm()
    {
        return 'Responsibility';
    }
}