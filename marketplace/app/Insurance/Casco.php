<?php

namespace App\Insurance;

Class Casco implements ProductContract
{
    public function getCreateForm()
    {
        return 'Casco';
    }
}