<?php

$page = "view/articles.php";
$title = "HOME PAGE";

function change_page($change) {
    $GLOBALS['page'] = $change;
    echo $GLOBALS['page'];
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
    if($_GET["page"] == "add") {
        $page = "view/add_article.php";
    }
}

include("layouts/header.php");

include("layouts/sidebar.php");

include($page);

include("layouts/footer.php");

?>