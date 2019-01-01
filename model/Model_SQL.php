<?php
class Model_SQL
{
    private $articleID = 1;
    private $state;

    private $advertisementData = array();
    private $articleData = array();
    private $boardData = array();
    private $cardFriendData = array();
    private $familyData = array();
    private $messageData = array();
    private $userData = array();

    //跟狀態有關
    public function getState()
    {
        return $this->state;
    }
    public function setState($aState)
    {
        $this->state = $aState;
    }
    //跟廣告有關
    public function addAD($title, $content)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO advertisement(title, billboard) VALUES ('$title', '$content')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function searchAD($title)
    {
        $this->advertisementData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from advertisement where title = '$title'";
        $result = mysqli_query($conn, $sql);
        while($advertisement = mysqli_fetch_row($result)) {
            $this->advertisementData[] = $advertisement;
        }
        return $this->advertisementData;
    }
    public function updateAD($title, $content)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "UPDATE advertisement SET billboard = '$content' WHERE title = '$title'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function deleteAD($title)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "DELETE FROM advertisement WHERE title = '$title'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    //跟文章有關
    public function addArticle($title, $board, $author, $content)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO articles(title, board, author, content, articleID) VALUES ('$title', '$board', '$author', '$content', '$this->articleID')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        $this->articleID++;
    }
    public function searchArticle($title)
    {
        $this->articleData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from articles where title = '$title'";
        $result = mysqli_query($conn, $sql);
        while($article = mysqli_fetch_row($result)) {
            $this->articleData[] = $article;
        }
        return $this->articleData;
    }
    public function searchAuthor($author)
    {
        $this->articleData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from articles where author = '$author'";
        $result = mysqli_query($conn, $sql);
        while($article = mysqli_fetch_row($result)) {
            $this->articleData[] = $article;
        }
        return $this->articleData;
    }
    public function getArticleID($title)
    {
        $this->searchArticle($title);
        return $this->articleData;
    }
    public function updateArticle($title, $content)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "UPDATE articles SET content = '$content', WHERE title = '$title'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function deleteArticle($title)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "DELETE FROM articles WHERE title = '$title'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    //跟看板有關
    public function searchBoard($board)
    {
        $this->boardData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from articles where board = '$board'";
        $result = mysqli_query($conn, $sql);
        while($board = mysqli_fetch_row($result)) {
            $this->boardData[] = $board;
        }
        return $this->boardData;
    }
    //跟卡友有關
    public function sendInvitation()
    {
        return true;
    }
    public function addCardFriend($me, $friend)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO cardfriend(me, friend) VALUES ('$me', '$friend')";
        $sql2 = "INSERT INTO cardfriend(me, friend) VALUES ('$friend', '$me')";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        mysqli_close($conn);
    }
    public function searchCardFriend($name)
    {
        $this->cardFriendData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from cardfriend where me = '$name'";
        $result = mysqli_query($conn, $sql);
        while($friend = mysqli_fetch_row($result)) {
            $this->cardFriendData[] = $friend;
        }
        return $this->cardFriendData;
    }
    public function deleteCardFriend($me, $friend)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "DELETE FROM cardfriend WHERE me = '$me' AND friend = '$friend'";
        $sql2 = "DELETE FROM cardfriend WHERE me = '$friend' AND friend = '$me'";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        mysqli_close($conn);
    }
    //跟家族有關
    public function request()
    {
        return true;
    }
    public function allow()
    {
        return true;
    }
    public function addFamily($member, $familyID)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO family(member, familyID) VALUES ('$member', '$familyID')";
        $this->searchUserData($member);
        $sql2 = "UPDATE users SET family = '$familyID' where name = '$this->userData[0]' AND school = '$this->userData[1]' 
        AND gender = '$this->userData[2]' AND birth = '$this->userData[3]' AND interests = '$this->userData[4]' AND clubs = '$this->userData[5]'
        AND  userID = '$this->userData[7]' AND cardFriend  = '$this->userData[8]'";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        mysqli_close($conn);
    }
    public function searchFamily($familyID)
    {
        $this->familyData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from tpage.family where familyID = '$familyID'";
        $result = mysqli_query($conn, $sql);
        while($family = mysqli_fetch_row($result)) {
            $this->familyData[] = $family;
        }
        return $this->familyData[0];
    }
    //跟訊息有關
    public function addMessage($name, $message, $article_ID)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO message(name, message, articleID) VALUES ('$name', '$message', '$article_ID')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function searchMessage($article_ID)
    {
        $this->messageData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from message where articleID = '$article_ID'";
        $result = mysqli_query($conn, $sql);
        while($message = mysqli_fetch_row($result)) {
            $this->messageData[] = $message;
        }
        return $this->messageData;
    }
    //跟使用者有關
    public function addUser($name, $email, $password, $school, $gender, $birth, $interests, $clubs, $family)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO users(name, email, password, school, gender, birth, interests, clubs, family) VALUES ('$name', '$email', '$password', '$school', '$gender', '$birth', '$interests', '$clubs', '$family')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function searchUser($name)
    {
        $this->userData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from users where name = '$name'";
        $result = mysqli_query($conn, $sql);
        while($user = mysqli_fetch_row($result)){
            $this->userData[] = $user;
        }
        return $this->userData;
    }
}
