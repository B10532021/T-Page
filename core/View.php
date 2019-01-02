<?php

namespace Core;


class View
{
    public static function render($view, $args = [])
    {
        $views = 'Views1';
        extract($args, EXTR_SKIP);

        require dirname(__DIR__) . "/app/$views/layouts/header.php";
        require dirname(__DIR__) . "/app/$views/layouts/sidebar.php";


        $file = dirname(__DIR__) . "/app/$views/view/$view";  // relative to Core directory
        if (is_readable($file)) {
            require $file;
        } else {
            echo 'no view';
        }

        require dirname(__DIR__) . "/app/$views/layouts/footer.php";
    }

}