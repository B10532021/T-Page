<?php
include_once "../model/Model_SQL.php";
$model = new Model_SQL();

$page = "view/articles.php";
$title = "HOME PAGE";
$board = 1;
$messages;
$title;
$article;

$user=$model->searchUser("大美人")[0];


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
$articles=$model->searchBoard("ECE".$board);

if(isset($_GET["page"])) {
    if($_GET["page"] == "articles") {
        $page = "view/articles.php";
    }
    if($_GET["page"] == "card") {
        $page = "view/card.php";
    }
    if($_GET["page"] == "profile") {
        $page = "view/profile.php";
        $articles=$model->searchAuthor($user[0]);
    }
    if($_GET["page"] == "article") {
        $page = "view/article.php";
    }
    if($_GET["page"] == "add") {
        $page = "view/add_article.php";
    }
    if($_GET["page"] == "register") {
        $page = "view/register.php";
    }
}

if(isset($_GET["title"])) {
    $title=$_GET["title"];
    $article=$articles[$title];
    $messages=$model->searchMessage($article[0]);
}
if(isset($_GET["article"])) {
    $article=$model->searchArticle($_GET["article"])[0];
    $messages=$model->searchMessage($article[0]);
}

include("layouts/header.php");

include("layouts/sidebar.php");

include($page);

include("layouts/footer.php");

?>