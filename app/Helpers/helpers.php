<?php

if (!function_exists('alert')) {
    function alert($text, $type = 'success')
    {
        session(['alert' => ['text' => $text, 'type' => $type]]);
    }
}
