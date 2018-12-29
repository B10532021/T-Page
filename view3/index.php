<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]>
<html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>
<html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T-Page</title>

    <!-- fonts files -->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,400italic,600,600italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


    <!-- Font awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- Owl carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/owl.theme.css">

    <!-- bx-slider css -->
    <link rel="stylesheet" href="css/jquery.bxslider.css">

    <!-- bootstrap select css -->
    <link rel="stylesheet" href="css/bootstrap-select.min.css">

    <!-- lightbox css -->
    <link rel="stylesheet" href="css/lightbox.css">

    <!-- Revolution slider css -->
    <link href="js/rs-plugin/css/settings.css" rel="stylesheet"/>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- This Template Is Fully Coded By Shakhawat H. from codingcouples.com -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

</html>
<?php

$page = "view/index.php";
$title = "Card_Friend";

function change_page($change)
{
    $GLOBALS['page'] = $change;
}

if (isset($_GET["page"])) {
    if ($_GET["page"] == "index") {
        $page = "view/index.php";
    }
    else if ($_GET["page"] == "card") {
        $page = "view/card.php";
    }
    else if ($_GET["page"] == "login") {
        $page = "view/login.php";
    }
    else if ($_GET["page"] == "register") {
        $page = "view/register.php";
    }
//    if($_GET["page"] == "profile") {
//        $page = "view/profile.php";
//    }
//    if($_GET["page"] == "article") {
//        $page = "view/article.php";
//    }
}

include("layout/header.php");

include("layout/nav.php");

include($page);

include("layout/footer.php");
?>


