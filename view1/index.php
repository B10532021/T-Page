<?php


$page = "view/articles.php";
$title = "HOME PAGE";
$board = 1;
function change_page($change) {
    $GLOBALS['page'] = $change;
    echo $GLOBALS['page'];
}
$uri = $_SERVER['QUERY_STRING'];
$method = $_SERVER['REQUEST_METHOD'];
$router->runRoute($uri, $method);

if(isset($_GET["page"])) {
    if($_GET["page"] == "articles") {
        $page = "view/articles.php";
    }
    if($_GET["page"] == "card") {
        $page = "view/card.php";
    }
    if($_GET["page"] == "profile") {
        $page = "view/profile.php";
    }
    if($_GET["page"] == "article") {
        $page = "view/article.php";
    }
    if($_GET["page"] == "add") {
        $page = "view/add_article.php";
    }
}

if(isset($_GET["board"])) {
    if($_GET["board"] == 1) {
        $board=1;
    }
    if($_GET["board"] == 2) {
        $board=2;
    }
    if($_GET["board"] == 3) {
        $board=3;
    }
    if($_GET["board"] == 4) {
        $board=4;
    }
}

include("layouts/header.php");

include("layouts/sidebar.php");

include($page);

include("layouts/footer.php");

?>