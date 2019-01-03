<?php session_start();?>
<?php
include_once "../model/Model_SQL.php";
$model = new Model_SQL();

$page = "view/login.php";
$title = 0;
$board = 1;
$messages;
$title;
$article;
$user;

//登入
if(isset($_POST["login_name"]) and isset($_POST['login_password'])) {
    if($model->login($_POST['login_name'], $_POST['login_password'])) {
        $_SESSION['user'] = $_POST['login_name'];
        $user = $model->searchUser($_POST['login_name'])[0];
        $page="view/articles.php";
    }
    else {
        echo "alert('登入失敗')";
        echo "<meta http-equiv='refresh' content='0'>";
    }
}

if(isset($_SESSION['user'])) {
    $user = $model->searchUser($_SESSION["user"])[0];
}

//看板
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

//page
if(isset($_GET["page"])) {
    if($_GET["page"] == "articles") {
        $page = "view/articles.php";
    }
    if($_GET["page"] == "card") {
        $page = "view/card.php";
    }
    if($_GET["page"] == "profile") {
        $page = "view/profile.php";
        if(isset($_GET["author"])) {
            $user = $model->searchUser($_GET["author"])[0];
        }
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
    if($_GET["page"] == "login") {
        $page = "view/login.php";
        unset($_SESSION['user']);
    }
}

//使用者更新資料
if(isset($_POST["update_interests"]) and isset($_POST["update_clubs"])) {
    $model->updateUser($user[0], $user[1], $user[2], $user[3], $user[4], $user[5], $_POST["update_interests"], $_POST["update_clubs"], $user[8]);
    echo "<meta http-equiv='refresh' content='0'>";
}

//單篇文章
if(isset($_GET["article"])) {
    $article=$model->searchArticle($_GET["article"])[0];
    $messages=$model->searchMessage($article[0]);
}

//留言
if(isset($_POST["message"])) {
    $model->addMessage($_POST["name"], $_POST["message"], $_POST["title"]);
    echo "<meta http-equiv='refresh' content='0'>";
}

//註冊
if(isset($_POST["email"]) and isset($_POST['password'])) {
    $model->register($_POST["name"], $_POST["email"], $_POST["password"], $_POST["school"], $_POST["gender"], $_POST["birth"]);
    $_SESSION['user'] = $_POST['name'];
}

//新增文章
if(isset($_POST["newArticle"])) {
    $model->addArticle($_POST['newTitle'], 'ECE'.$_POST["board1"], $user[0], $_POST["newArticle"]);
    $page = "view/articles.php";
}




include("layouts/header.php");

if(isset($_SESSION['user'])) {
    include("layouts/sidebar.php");
}

include($page);

include("layouts/footer.php");

?>