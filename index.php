<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="view1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view1/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="view1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="view1/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="view1/css/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="view1/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="view1/css/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="view1/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="view1/css/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="view1/css/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="view1/css/card.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<?php

/**
 * Composer
 */
require __DIR__ . './vendor/autoload.php';

$router = new \Core\Router();
//$router->addRoute('GET', 'users', 'UserController@index');
//$router->addRoute('GET', 'users/{id:\d+}', 'UserController@show');
//$router->addRoute('GET', 'users/create', 'UserController@create');
//$router->addRoute('POST', 'users', 'UserController@store');
//$router->addRoute('GET', 'users/{id:\d+}/edit', 'UserController@edit');
//$router->addRoute('PUT', 'users/{id:\d+}', 'UserController@update');
//$router->addRoute('DELETE', 'users/{id:\d+}', 'UserController@destroy');

$router->resource('users', 'UserController');
$router->resource('boards', 'BoardController');
$router->resource('articles', 'ArticleController');

$uri = $_SERVER['QUERY_STRING'];
$method = $_SERVER['REQUEST_METHOD'];

$router->runRoute($uri, $method);