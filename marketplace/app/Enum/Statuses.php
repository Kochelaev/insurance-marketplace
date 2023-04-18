<?php

namespace App\Enum;

/**
 * Class contains statuses of orders.
 *
 */
class Statuses
{
    const PAID = 'P';
    const COMPLETE = 'C';
    const OPEN = 'O';
    const FAILED = 'F';
    const DECLINED = 'D';
    const BACKORDERED = 'B';
    const CANCELED = 'I';
    const INCOMPLETED = 'N';
    const PARENT = 'T';
}
