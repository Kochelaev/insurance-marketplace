<?php

namespace App\Insurance;

class Callables
{
    public static function sexCoefficients()
    {
        return [
            'M' => 'Коеффициент мужского пола',
            'F' => 'Коеффициент женского пола'
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
