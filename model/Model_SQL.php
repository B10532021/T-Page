<?php
class Model_SQL
{
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
        mysqli_query( $conn, "SET NAMES 'utf8'");
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
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "UPDATE advertisement SET billboard = '$content' WHERE title = '$title'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function deleteAD($title)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM advertisement WHERE title = '$title'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    //跟文章有關
    public function addArticle($title, $board, $author, $content)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "INSERT INTO articles(title, board, author, content) VALUES ('$title', '$board', '$author', '$content')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
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
    public function updateArticle($title, $content)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "UPDATE articles SET content = '$content' WHERE title = '$title'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function deleteArticle($title)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM articles WHERE title = '$title'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    //跟看板有關
    public function addBoard($boardName)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "INSERT INTO board(boardname) VALUES ('$boardName')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
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
    public function updateBoard($boardName)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "UPDATE board SET boardname = '$boardName' WHERE boardname = '$boardName'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function deleteBoard($boardName)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM board WHERE boardname = '$boardName'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function lookUpBoard()
    {
        $this->boardData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from board";
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
        mysqli_query( $conn, "SET NAMES 'utf8'");
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
        mysqli_query( $conn, "SET NAMES 'utf8'");
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
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "INSERT INTO family(member, familyID) VALUES ('$member', '$familyID')";
        $sql2 = "UPDATE users SET family = '$familyID' WHERE name = '$member'";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        mysqli_close($conn);
    }
    public function searchFamily($familyID)
    {
        $this->familyData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from family where familyID = '$familyID'";
        $result = mysqli_query($conn, $sql);
        while($family = mysqli_fetch_row($result)) {
            $this->familyData[] = $family;
        }
        return $this->familyData;
    }
    public function deleteFamily($member, $family)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM family WHERE member = '$member' AND familyID = '$family'";
        $sql2 = "UPDATE users SET family = null WHERE name = '$member'";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        mysqli_close($conn);
    }
    //跟訊息有關
    public function addMessage($name, $message, $title)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "INSERT INTO message(name, message, title) VALUES ('$name', '$message', '$title')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function searchMessage($title)
    {
        $this->messageData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from message Where title = '$title'";
        $result = mysqli_query($conn, $sql);
        while($message = mysqli_fetch_row($result)) {
            $this->messageData[] = $message;
        }
        return $this->messageData;
    }
    public function updateMessage($name, $message, $title)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "UPDATE message SET message = '$message' WHERE name = '$name' AND title = '$title'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function deleteMessage($name, $message, $title)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM message WHERE name = '$name' AND message = '$message' AND title = '$title'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    //跟使用者有關
    public function addUser($name, $email, $password, $school, $gender, $birth = null, $interests = null, $clubs = null, $family = null)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
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
    public function updateUser($name, $email, $password, $school, $gender, $birth, $interests, $clubs, $family)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password', interests = '$interests', clubs = '$clubs' 
        WHERE school = '$school' AND gender = '$gender' AND birth = '$birth' AND family = '$family'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function deleteUser($name, $email, $password)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM users WHERE name = '$name' AND email = '$email' AND password = '$password'";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
}
