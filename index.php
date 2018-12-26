<?php

$page = "view/card.php";
$title = "Card_Friend";

if(isset($_GET["page"])) {
    if($_GET["page"] == "about") {
        $page = "page-about.php";
        $title = "About Me";
    }
    if($_GET["page"] == "contact") {
        $page = "page-contact.php";
        $title = "Contact Me";
    }
}

include("layouts/header.php");

include("layouts/sidebar.php");

include($page);

include("layouts/footer.php");

?>