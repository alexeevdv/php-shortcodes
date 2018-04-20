<?php

namespace alexeevdv\shortcodes;

/**
 * Interface IReplacer
 * @package alexeevdv\shortcodes
 */
interface IReplacer
{
    /**
     * Should return replacement for shortcode or false if shortcode should not be replaced
     *
     * @param IShortcode $shortcode
     * @return string|bool
     */
    public function replace(IShortcode $shortcode);
}
