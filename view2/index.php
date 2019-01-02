<?php

include "../model/Model_SQL.php";

$model=new Model_SQL();



$page = "view/articles.php";
$title = "Card_Friend";
$articleTitle="1";
$article;
$messages=array();
$userArticles;
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
    if($_GET["page"] == "register") {
        $page = "view/register.php";
    }
    if($_GET["page"] == "login") {
        $page = "view/login.php";
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

if(isset($_GET["articleTitle"])) {

    $articleTitle=$_GET["articleTitle"];

    $article=$model->searchArticle($articleTitle)[0];
    $messages=$model->searchMessage($articleTitle);

}

if(isset($_POST["newMessage"]))
{
    $model->addMessage("王小明",$_POST["newMessage"],$_POST["title"]);
}

if(isset($_POST["newArticle"]))
{
    $model->addArticle($_POST["title"],$_POST["board"],"王小明",$_POST["newArticle"]);
}


$user=$model->searchUser("王小明")[0];
$articles=$model->searchBoard("ECE".$board);

include("layouts/header.php");

include($page);


include("layouts/footer.php");

?>



