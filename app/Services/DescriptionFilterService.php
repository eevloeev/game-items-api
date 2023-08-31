<?php

namespace App\Services;

class DescriptionFilterService
{
    public function filterLinks($text)
    {
        return preg_replace('/(https?:\/\/\S+)/i', '<a href="$1">$1</a>', $text);
    }

    public function removeImages($text)
    {
        return preg_replace('/<img\b[^>]*>/i', '', $text);
    }
}
