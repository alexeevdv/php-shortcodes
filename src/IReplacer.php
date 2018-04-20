<?php

namespace alexeevdv\shortcodes;

/**
 * Interface IReplacer
 * @package alexeevdv\shortcodes
 */
interface IReplacer
{
    /**
     * @param IShortcode $shortcode
     * @return string
     */
    public function replace(IShortcode $shortcode);
}
