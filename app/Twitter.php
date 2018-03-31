<?php

namespace App;

use Illuminate\Support\Facades\Log;

class Twitter
{
    public static function sendTweet($message)
    {
        Log::info($message);

        sleep(1);
    }
}
