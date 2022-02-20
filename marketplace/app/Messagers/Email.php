<?php

namespace App\Messagers;

Class Email implements MessageInterface
{
    public function callbackRequest(int $userId, int $companyId, int $productId)
    {                
        dd ($userId, $companyId, $productId);
    }
}
