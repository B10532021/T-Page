<?php

namespace Core;

class Controller
{
    protected $params= [];
    protected $view;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function assign($key, $value)
    {
        //$this->view->assign($key, $value);
    }

    public function getTemplate()
    {

    }

    public function render()
    {
        //$this->view->render();
    }
}