<?php session_start();?>
<?php
include_once "../model/Model_SQL.php";
$model = new Model_SQL();

$page = "view/login.php";
$title = 0;
$board = 1;
$family;
$messages;
$title;
$article;
$user;
$newCardUser;
$friends;

//登入
if(isset($_POST["login_name"]) and isset($_POST['login_password'])) {
    if($model->login($_POST['login_name'], $_POST['login_password'])) {
        $_SESSION['user'] = $_POST['login_name'];
        $user = $model->searchUser($_POST['login_name'])[0];
        $page="view/articles.php";
        $newCardUser=$model->randomUser()[0];

        while($newCardUser[0]==$_SESSION['user'])
        {
            $newCardUser=$model->randomUser()[0];
        }
        if(!isset($_SESSION["cardfriend"])) {
            $_SESSION["cardfriend"] = $newCardUser;
        }
    }
    else {
        echo "<script>alert('登入失敗')</script>";
        echo "<meta http-equiv='refresh' content='0'>";
    }
}

//註冊
if(isset($_POST["email"]) and isset($_POST['password'])) {
    $model->register($_POST["name"], $_POST["email"], $_POST["password"], $_POST["school"], $_POST["gender"], $_POST["birth"]);
    $_SESSION["user"] = $_POST['name'];
    $newCardUser=$model->randomUser()[0];

    while($newCardUser[0]==$_SESSION['user'])
    {
        $newCardUser=$model->randomUser()[0];
    }
    if($_SESSION["cardfriend"] == null) {
        $_SESSION["cardfriend"] = $newCardUser;
    }
}

if(isset($_SESSION["user"])) {
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
        unset($_SESSION['cardfriend']);
    }
    if($_GET["page"] == "joinFamily") {
        $page = "view/join_family.php";
    }
    if($_GET["page"] == "family") {
        $page = "view/family.php";
        $family=$model->searchFamily($user[8]);
    }
    if($_GET["page"] == "friend") {
        $page = "view/friend.php";
        $friends=$model->searchCardFriend($user[0]);
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
    $model->addMoney($user[0], $user[9]);
    echo "<meta http-equiv='refresh' content='0'>";
}

//新增文章
if(isset($_POST["newArticle"])) {
    $model->addArticle($_POST['newTitle'], 'ECE'.$_POST["board1"], $user[0], $_POST["newArticle"]);
    $model->addMoney($user[0], $user[9]);
    $page = "view/articles.php";
    echo "<meta http-equiv='refresh' content='0'>";

}

//加入家族
if(isset($_POST["family"])) {
    if($user[8]!=null) {
        $model->deleteFamily($_SESSION['user'], $user[8]);
    }
    $model->addFamily($_SESSION['user'],$_POST["family"]);
    echo "<meta http-equiv='refresh' content='0'>";
}

//按讚
if(isset($_POST["like"])) {
    $model->addGood($_POST["title"], $_POST["like"]);
    echo "<meta http-equiv='refresh' content='0'>";
}

//倒讚
if(isset($_POST["dislike"])) {
    $model->addBad($_POST["title"], $_POST["dislike"]);
    echo "<meta http-equiv='refresh' content='0'>";
}

//抽卡
if(isset($_POST["cardfriend"]))
{
    $model->sendInvitation($_POST['name'],$_POST['cardfriend']);
    $model->minusMoney($user[0], $user[9]);
    echo "<meta http-equiv='refresh' content='0'>";
}


include("layouts/header.php");

if(isset($_SESSION['user'])) {
    include("layouts/sidebar.php");
}

include($page);

include("layouts/footer.php");

?>