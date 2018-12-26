<?php

$page = "view/articles.php";
$title = "Card_Friend";

if(isset($_GET["page"])) {
    if($_GET["page"] == "articles") {
        $page = "view/article.php";
    }
    if($_GET["page"] == "card") {
        $page = "view/card.php";
    }
    if($_GET["page"] == "profile") {
    $page = "view/profile.php";
    }
}

include("layouts/header.php");

include("layouts/sidebar.php");

include($page);

include("layouts/footer.php");

?>