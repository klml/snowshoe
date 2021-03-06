<?php
/**
 *
 * @author Ed van Beinum <e@edvanbeinum.com>
 * @version $Id$
 * @package Snowshoe
 */

namespace Snowshoe\Helper;
/**
 * A bunch of helper methods for Strings
 *
 * @package Snowshoe
 * @author Ed van Beinum <e@edvanbeinum.com>
 */
class String
{
    /**
     * converts a slugged string (we guess something like: dashes or underscores used instead of spaces and all lowercase)
     * to a title case string
     * e.g. this-is-a-slug becomes This Is A Slug
     *
     * @param $sluggedString
     * @return string
     */
    public static function getDeslugified($sluggedString)
    {
        $desluggedString = str_replace(array('-', '_'), ' ', $sluggedString);
        return ucwords(trim($desluggedString));
    }
}
