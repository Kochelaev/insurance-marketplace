<?php

namespace App\Messagers;

interface MessageInterface
{
    public function callbackRequest(int $userId, int $companyId, int $productId);
}