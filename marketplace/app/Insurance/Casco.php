<?php

namespace App\Insurance;

use App\Insurance\BaseInsurance\AutoType;

class Casco extends AutoType implements ProductContract
{
    public function getCreateForm()
    {
        return 'КАСКО';
    }
}
