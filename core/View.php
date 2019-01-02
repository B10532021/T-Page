<?php

namespace Core;


class View
{
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . "/app/Views/$view";  // relative to Core directory
        if (is_readable($file)) {
            require $file;
        } else {
            echo 'no view';
        }
    }

}