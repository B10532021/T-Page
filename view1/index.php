<?php
$articles = $model->searchArticle('ECE1');
$article = $articles[0];
$page = "view/articles.php";
$title = "HOME PAGE";
$board = 1;


if(isset($_GET["board"])) {
    if($_GET["board"] == 1) {
        $board=1;
        $articles = $model->searchArticle('ECE1');
    }
    if($_GET["board"] == 2) {
        $board=2;
        $articles = $model->searchArticle('ECE2');
    }
    if($_GET["board"] == 3) {
        $board=3;
        $articles = $model->searchArticle('ECE3');
    }
    if($_GET["board"] == 4) {
        $board=4;
        $articles = $model->searchArticle('ECE4');
    }
}


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
        if($_GET["index"]) {
            $article = $articles[$_GET["index"]];
        }
    }
    if($_GET["page"] == "add") {
        $page = "view/add_article.php";
    }
    if($_GET["page"] == "register") {
        $page = "view/register.php";
    }
}

include("layouts/header.php");

include("layouts/sidebar.php");

include($page);

include("layouts/footer.php");

?>