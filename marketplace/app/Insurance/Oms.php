<?php

namespace App\Insurance;

Class Oms implements ProductContract
{
    public function getCreateForm()
    {
        return 'Oms';
    }
}
