<?php

namespace App\Insurance;

Class Appartment implements ProductContract
{
    public function getCreateForm()
    {
        return 'appartment';
    }
}