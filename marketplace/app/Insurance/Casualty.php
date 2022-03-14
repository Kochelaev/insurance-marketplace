<?php

namespace App\Insurance;

Class Casualty implements ProductContract
{
    public function getCreateForm()
    {
        return 'Casualty';
    }
}