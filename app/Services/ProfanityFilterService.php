<?php

namespace App\Services;

use App\Models\ProfanityWord;

class ProfanityFilterService
{
    public function filter($text)
    {
        $profanityWords = ProfanityWord::pluck('word')->toArray();
        return str_replace($profanityWords, '…', $text);
    }
}
