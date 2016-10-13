<?php

namespace Statamic\Addons\Tel;

use Statamic\Extend\Modifier;

class TelModifier extends Modifier
{
    /**
     * Convert formatted phone number
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return string
     */
    public function index($value, $params, $context)
    {
        // If any + is found, prepend number with 00
        if (preg_match('/[+]/', $value)) {
            $value = '00'.$value;
        }
        // Remove anything inside brackets
        $value = preg_replace('/\(0\)/', '', $value);
        // Remove anything that's left that isn't a number
        $value = preg_replace('/[^0-9]/', '', $value);

        return $value;
    }
}
