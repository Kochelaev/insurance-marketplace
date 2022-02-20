<?php

namespace App\Http\Controllers;

use App\Messagers\Email;
use App\Messagers\MessageInterface;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function callbackRequest(request $request, MessageInterface $message)
    {
        $message->callbackRequest(
            auth()->user()->id,
            $request->get('companyId'),
            $request->get('productId')
        );
        // $userId = auth()->user()->id;
        // dump ($userId);
        // $compnyId = $request->get('companyId');
        // dd ($compnyId);
    }
}
