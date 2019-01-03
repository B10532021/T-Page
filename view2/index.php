<?php session_start();?>
<?php

include "../model/Model_SQL.php";

$model=new Model_SQL();



$page = "view/articles.php";
$title = "Card_Friend";
$articleTitle="1";
$article;
$messages=array();
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
        $newCardUser=$model->randomUser()[0];

        while($newCardUser[0]==$_SESSION['user'][0])
        {
            $newCardUser=$model->randomUser()[0];
        }
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
    if($_GET["page"] == "joinFamily") {
        $page = "view/joinFamily.php";
    }
    if($_GET["page"] == "family") {
        $page = "view/family.php";
        $family=$model->searchFamily($_SESSION['user'][8]);
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

//轉到文章頁面
if(isset($_GET["articleTitle"])) {

    $articleTitle=$_GET["articleTitle"];

    $article=$model->searchArticle($articleTitle)[0];
    $messages=$model->searchMessage($articleTitle);

}

//發留言
if(isset($_POST["newMessage"]))
{
    $model->addMessage("王小明",$_POST["newMessage"],$_POST["title"]);
}

//發文
if(isset($_POST["newArticle"]))
{
    $model->addArticle($_POST["title"],$_POST["board"],$_SESSION['user'][0],$_POST["newArticle"]);
}

//註冊
if(isset($_POST["email"]) and isset($_POST['password'])) {
    $model->register($_POST["name"], $_POST["email"], $_POST["password"], $_POST["school"],
        $_POST["gender"],$_POST["birth"],$_POST["interests"],$_POST["clubs"]);
}


//登入
if(isset($_POST["name"]) and isset($_POST['password'])) {
    if($model->login($_POST["name"],$_POST["password"]))
    {
        $_SESSION['user'] = $model->searchUser($_POST["name"])[0];

    }
}

//加家族
if(isset($_POST["family"])) {
    $model->addFamily($_SESSION['user'][0],$_POST["family"]);
}


function logout()
{
    unset($_SESSION['user']);
}

function addCardFriend($myName,$friendName)
{
    $model=new Model_SQL();
    $model->sendInvitation($myName,$friendName);
}

if(isset($_POST['action']))
{
    if($_POST['action']=="logout")
    {
        logout();
    }
    if($_POST['action']=="addCardFriend")
    {
        addCardFriend($_POST['myName'],$_POST['friendName']);
    }
}

$articles=$model->searchBoard("ECE".$board);



include("layouts/header.php");

include($page);


include("layouts/footer.php");

?>



