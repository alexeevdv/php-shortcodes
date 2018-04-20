<?php

namespace alexeevdv\shortcodes;

/**
 * Interface IShortcode
 * @package alexeevdv\shortcodes
 */
interface IShortcode
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return array
     */
    public function getParams();

    /**
     * @return string
     */
    public function getContent();
}
