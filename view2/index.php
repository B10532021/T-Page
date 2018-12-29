<?php

$page = "view/articles.php";
$title = "Card_Friend";

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

include("layouts/header.php");

include($page);


include("layouts/footer.php");

?>