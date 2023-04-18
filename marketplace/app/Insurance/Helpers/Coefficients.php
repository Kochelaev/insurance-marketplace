<?php

namespace App\Insurance\Helpers;

use App\Enum\Sex;

class Coefficients
{
    public static function sexCoefficients()
    {
        return [
            Sex::MALE   => 'Коеффициент мужского пола',
            Sex::FEMALE => 'Коеффициент женского пола'
        ];
    }

    public static function ageCoefficients()
    {
        return [
            '1950-01-01' => 'c 1950',
            '1970-01-01' => 'c 1970',
            '1990-01-01' => 'c 1990',
            '2010-01-01' => 'c 2010'
        ];
    }
}
