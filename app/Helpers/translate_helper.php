<?php

use Stichoza\GoogleTranslate\GoogleTranslate;

if (!function_exists('gtranslate')) {
    function gtranslate($text)
    {
        try {
            $locale = session('locale', 'en');
            $tr = new GoogleTranslate($locale);
            return $tr->translate($text);
        } catch (\Exception $e) {
            return $text; // fallback
        }
    }
}
