<?php

namespace EpicKris;

/**
 * Cross site scripting interface.
 *
 * @package EpicKris
 */
interface IXss
{
    /**
     * Cross site scripting clean.
     *
     * Sanitizes data so that cross site scripting hacks can be prevented.
     *
     * @param string|string[] $data    Input data.
     * @param bool            $isImage Whether the input is an image.
     *
     * @return string Sanitized data.
     */
    public static function xssClean($data, $isImage = false);
}
