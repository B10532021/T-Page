<?php

$page = "view/articles.php";
$title = "Card_Friend";

function change_page($change) {
    $GLOBALS['page'] = $change;
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
    }
}

include("layouts/header.php");

include("layouts/sidebar.php");

include($page);

include("layouts/footer.php");

?>