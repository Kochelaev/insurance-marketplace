<?php

namespace App\Insurance;

Class Mortgage implements ProductContract
{
    public function getCreateForm()
    {
        return 'Mortgage';
    }
}
