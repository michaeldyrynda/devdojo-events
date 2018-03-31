<?php

namespace App;

use Illuminate\Support\Facades\Log;

class Mailout
{
    public static function send($users, $message)
    {
        Log::info('Sending mailout to users', [
            'users' => $users->count(),
            'message' => $message,
        ]);

        sleep(3);
    }
}
