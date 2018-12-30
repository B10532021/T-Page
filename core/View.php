<?php

namespace Core;


class View
{
    protected $data;
    protected $method;
    protected $controller;

    function __construct($controller, $method)
    {
        $this->controller = strtolower($controller);
        $this->method = strtolower($method);
    }

    // 分配变量
    public function assign($key, $value)
    {
        $this->data[$key] = $value;
    }

    // 渲染显示
//    public function render()
//    {
//        extract($this->data);
//        $defaultHeader = APP_PATH . 'app/views/header.php';
//        $defaultFooter = APP_PATH . 'app/views/footer.php';
//
//        $controllerHeader = APP_PATH . 'app/views/' . $this->controller . '/header.php';
//        $controllerFooter = APP_PATH . 'app/views/' . $this->controller . '/footer.php';
//        $controllerLayout = APP_PATH . 'app/views/' . $this->controller . '/' . $this->method . '.php';
//
//        // 页头文件
//        if (is_file($controllerHeader)) {
//            include ($controllerHeader);
//        } else {
//            include ($defaultHeader);
//        }
//
//        //判断视图文件是否存在
//        if (is_file($controllerLayout)) {
//            include ($controllerLayout);
//        } else {
//            echo "<h1>无法找到视图文件</h1>";
//        }
//
//        // 页脚文件
//        if (is_file($controllerFooter)) {
//            include ($controllerFooter);
//        } else {
//            include ($defaultFooter);
//        }
//    }

}