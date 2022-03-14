<?php

namespace App\Insurance;

class Osago implements ProductContract
{

    public function getCreateForm()
    {
        return 'Osago';
    }
}
