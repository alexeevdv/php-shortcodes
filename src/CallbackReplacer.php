<?php

namespace alexeevdv\shortcodes;

/**
 * Class CallbackReplacer
 * @package alexeevdv\shortcodes
 */
class CallbackReplacer implements IReplacer
{
    /**
     * @var callable
     */
    private $_callback;

    /**
     * CallbackReplacer constructor.
     * @param callable $callback
     */
    public function __construct($callback)
    {
        $this->_callback = $callback;
    }

    /**
     * @inheritdoc
     */
    public function replace(IShortcode $shortcode)
    {
        return call_user_func($this->_callback, $shortcode);
    }
}
