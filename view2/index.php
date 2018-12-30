<?php

include "../model/Model_SQL.php";

$model=new Model_SQL();

$user=$model->searchUser();
$page = "view/articles.php";
$title = "Card_Friend";
$board=1;

if(isset($_GET["page"])) {
    if($_GET["page"] == "article") {
        $page = "view/article.php";
    }
    if($_GET["page"] == "articles") {
        $page = "view/articles.php";
    }
    if($_GET["page"] == "card") {
        $page = "view/card.php";
    }
    if($_GET["page"] == "profile") {
    $page = "view/profile.php";
    }
    if($_GET["page"] == "writeArticle") {
        $page = "view/writeArticle.php";
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

include($page);


include("layouts/footer.php");

?>