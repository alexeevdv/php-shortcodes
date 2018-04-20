<?php

namespace alexeevdv\shortcodes;

/**
 * Interface IProcessor
 * @package alexeevdv\shortcodes
 */
interface IProcessor
{
    /**
     * @param string $content
     * @return string
     */
    public function process($content, IMatcher $matcher, IReplacer $replacer);
}
