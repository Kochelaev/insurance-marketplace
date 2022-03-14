<?php

namespace App\Insurance;

Class Responsibility implements ProductContract
{
    public function getCreateForm()
    {
        return 'Responsibility';
    }
}