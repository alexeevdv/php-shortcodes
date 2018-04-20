<?php

namespace alexeevdv\shortcodes;

/**
 * Class Parser
 * @package alexeevdv\shortcodes
 *
 * This file contains code taken from WordPress source code (wp-includes/shortcodes.php)
 */
class Processor implements IProcessor
{
    /**
     * @inheritdoc
     */
    public function process($content, IMatcher $matcher, IReplacer $replacer)
    {
        return $matcher->match($content, function (IShortcode $shortcode) use ($replacer) {
            return $replacer->replace($shortcode);
        });
    }

}
