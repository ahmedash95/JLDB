<?php

if (!function_exists('toObject')) {

    /**
     * Convert array to object.
     *
     * @param array $array
     *
     * @return object
     */
    function toObject(array $array)
    {
        return (object) $array);
    }
}
