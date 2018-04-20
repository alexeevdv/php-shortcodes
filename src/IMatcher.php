<?php

namespace alexeevdv\shortcodes;

/**
 * Interface IMatcher
 * @package alexeevdv\shortcodes
 */
interface IMatcher
{
    /**
     * @param string $content
     * @param callable $callback
     */
    public function match($content, $callback);
}
