<?php

namespace EditorconfigChecker\Utilities;

class Utilities
{
    public static function getEndOfLineChar($rules)
    {
        if (isset($rules['end_of_line'])) {
            return $rules['end_of_line'] == 'lf' ? "\n" : ($rules['end_of_line'] == 'cr' ? "\r" : "\r\n");
        }

        return null;
    }
}
