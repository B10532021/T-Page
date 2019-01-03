<?php session_start(); ?>
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
    <link rel="shortcut icon" type="image/ico" href="images/favicon.png"/>

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


include_once "../model/Model_SQL.php";
$model = new Model_SQL();

$page = "view/index.php";
$title = "HOME PAGE";

if (isset($_GET["page"])) {
    if ($_GET["page"] == "articles") {
        $page = "view/articles.php";
    }
    if ($_GET["page"] == "card") {
        $page = "view/card.php";
        $friend = $model->randomUser()[0];
    }
    if ($_GET["page"] == "profile") {
        $page = "view/profile.php";
        $user = $model->searchUser($_SESSION["user"])[0];
        $articles = $model->searchAuthor($_SESSION["user"]);
    }
    if ($_GET["page"] == "article") {
        $page = "view/article.php";
    }
    if ($_GET["page"] == "add") {
        $page = "view/add_article.php";
    }
    if ($_GET["page"] == "register") {
        if (isset($_SESSION["user"])) {
            echo "<script>location.href='../#'</script>";
        } else {
            $page = "view/register.php";
        }

    }
    if ($_GET["page"] == "login") {
        if (isset($_SESSION["user"])) {
            echo "<script>location.href='../#'</script>";
        } else {
            $page = "view/login.php";
        }
    }
    if ($_GET["page"] == "logout") {
        unset($_SESSION["user"]);
        echo "<script>location.href='../#'</script>";
    }
}

if (isset($_GET["board"])) {
    $board = $_GET["board"];
    $articles = $model->searchBoard($board);
}

if (isset($_GET["title"])) {
    $title = $_GET["title"];
    $article = $articles[$title];
    $messages = $model->searchMessage($article[0]);
}
if (isset($_GET["article"])) {
    $article = $model->searchArticle($_GET["article"])[0];
    $messages = $model->searchMessage($article[0]);
}

//上傳照片
if (isset($_FILES["file"]["name"])) {

    $name = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $imageFileType = strtolower(pathinfo("uploads/" . basename($_FILES["file"]["name"]), PATHINFO_EXTENSION));
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "<script>alert(\"Sorry, only JPG, JPEG, PNG & GIF files are allowed.\")</script>";
        echo "<script>location.href='../?page=profile'</script>";


    }
    if (!empty($name)) {
        $location = 'images/';
        if (file_exists($location . $_SESSION["user"] . ".jpg")) {
            unlink($location . $_SESSION["user"] . ".jpg");
        }
        if (move_uploaded_file($tmp_name, $location . $_SESSION["user"] . ".jpg")) {
            echo "<script>location.href='../?page=profile'</script>";

        }
    } else {
        echo 'please choose a file';
    }
    echo "<script>location.href='../?page=profile'</script>";

}

//註冊
if (isset($_POST["register"])) {
    $birth = "";
    $interests = "";
    $clubs = "";
    $family = "";
    if (isset($_POST["birth"])) {
        $birth = $_POST["birth"];
    }
    if (isset($_POST["interests"])) {
        $interests = $_POST["interests"];
    }
    if (isset($_POST["clubs"])) {
        $clubs = $_POST["clubs"];
    }
    if (isset($_POST["family"])) {
        $family = $_POST["family"];
    }

    $model->register($_POST["name"], $_POST["email"], $_POST["password"], $_POST["school"], $_POST["gender"], $birth,
        $interests, $clubs, $family);

    $_SESSION["user"] = $_POST["name"];
}

//login
if (isset($_POST["login"])) {
    if ($model->login($_POST["name"], $_POST["password"])) {
        $_SESSION["user"] = $_POST["name"];
        $user = $model->searchUser($_POST["name"]);
        $page = "view/index.php";
    } else {
        echo "<script>alert('帳號或密碼錯誤')</script>";
        echo "<script>location.href='../?page=login'</script>";

    }
}

//修改資料
if (isset($_POST["profile"])) {
    $user = $model->searchUser($_SESSION["user"])[0];
    $interests = "";
    $clubs = "";
    $family = "";
    if (isset($_POST["interests"])) {
        $interests = $_POST["interests"];
    }
    if (isset($_POST["clubs"])) {
        $clubs = $_POST["clubs"];
    }
    if (isset($_POST["family"])) {
        $family = $_POST["family"];
    }

    $model->register($user[0], $user[1], $user[2], $user[3], $user[4], $user[5], $interests, $clubs, $family);
    echo "<script>location.href='../?page=profile'</script>";

}

//add_article
if (isset($_POST["add_article"])) {
    if (isset($_SESSION['user'])) {
        $model->addArticle($_POST["title2"], $_POST["board"], $_SESSION["user"], $_POST["context"]);
        echo "<script>location.href='../?page=articles&board={$_POST["board"]}'</script>";
    } else {
        echo "<script>alert('請先登入')</script>";
        echo "<script>location.href='../?page=login'</script>";
    }
}

//message
if (isset($_POST["message"])) {
    if (isset($_SESSION["user"])) {
        $model->addMessage($_SESSION["user"], $_POST["message"], $_POST["title1"]);
        echo "<script>location.href='../?page=articles&board={$_POST['board1']}&title={$_POST['title1']}'</script>";
    } else {
        echo "<script>alert('請先登入')</script>";
        echo "<script>location.href='../?page=login'</script>";
    }
}

//card
if (isset($_POST["card"])) {
    $model->sendInvitation($_SESSION["user"], $_POST["name"]);
    echo "<script>location.href='../?page=card'</script>";
}

$boards = $model->lookUpBoard();

include("layout/header.php");

include("layout/nav.php");

include($page);

include("layout/footer.php");
?>


