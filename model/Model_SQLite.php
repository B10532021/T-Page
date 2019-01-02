<?php
class Model_SQLite
{
    private $state;
    private $advertisementData = array();
    private $articleData = array();
    private $boardData = array();
    private $cardFriendData = array();
    private $familyData = array();
    private $messageData = array();
    private $userData = array();

    //註冊
    public function register($name, $email, $password, $school, $gender, $birth = null, $interests = null, $clubs = null, $family = null)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "INSERT INTO users(name, email, password, school, gender, birth, interests, clubs, family) VALUES ('$name', '$email', '$password', '$school', '$gender', '$birth', '$interests', '$clubs', '$family')";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    //登入
    public function login($name, $password)
    {
        $this->userData = array();
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from users WHERE name = '$name' AND password = '$password'";
        $result = sqlite_query($conn, $sql);
        while($user = sqlite_fetch_array($result)) {
            $this->userData[] = $user;
        }
        if(sqlite_fetch_array($this->userData[0]))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
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
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "INSERT INTO advertisement(title, billboard) VALUES ('$title', '$content')";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    public function searchAD($title)
    {
        $this->advertisementData = array();
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from advertisement where title = '$title'";
        $result = sqlite_query($conn, $sql);
        while($advertisement = sqlite_fetch_array($result)) {
            $this->advertisementData[] = $advertisement;
        }
        return $this->advertisementData;
    }
    public function updateAD($title, $content)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "UPDATE advertisement SET billboard = '$content' WHERE title = '$title'";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    public function deleteAD($title)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM advertisement WHERE title = '$title'";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    //跟文章有關
    public function addArticle($title, $board, $author, $content)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $datetime = date("Y-m-d/H:i:s", mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y')));
        $sql = "INSERT INTO articles(title, board, author, content, time) VALUES ('$title', '$board', '$author', '$content', '$datetime')";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    public function searchArticle($title)
    {
        $this->articleData = array();
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from articles where title = '$title'";
        $result = sqlite_query($conn, $sql);
        while($article = sqlite_fetch_array($result)) {
            $this->articleData[] = $article;
        }
        return $this->articleData;
    }
    public function searchAuthor($author)
    {
        $this->articleData = array();
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from articles where author = '$author'";
        $result = sqlite_query($conn, $sql);
        while($article = sqlite_fetch_array($result)) {
            $this->articleData[] = $article;
        }
        return $this->articleData;
    }
    public function updateArticle($title, $content)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "UPDATE articles SET content = '$content' WHERE title = '$title'";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    public function deleteArticle($title)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM articles WHERE title = '$title'";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    //跟看板有關
    public function addBoard($boardName)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "INSERT INTO board(boardname) VALUES ('$boardName')";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    public function searchBoard($board)
    {
        $this->boardData = array();
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from articles where board = '$board'";
        $result = sqlite_query($conn, $sql);
        while($board = sqlite_fetch_array($result)) {
            $this->boardData[] = $board;
        }
        return $this->boardData;
    }
    public function updateBoard($boardName)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "UPDATE board SET boardname = '$boardName' WHERE boardname = '$boardName'";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    public function deleteBoard($boardName)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM board WHERE boardname = '$boardName'";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    public function lookUpBoard()
    {
        $this->boardData = array();
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from board";
        $result = sqlite_query($conn, $sql);
        while($board = sqlite_fetch_array($result)) {
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
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "INSERT INTO cardfriend(me, friend) VALUES ('$me', '$friend')";
        $sql2 = "INSERT INTO cardfriend(me, friend) VALUES ('$friend', '$me')";
        sqlite_query($conn, $sql);
        sqlite_query($conn, $sql2);
        sqlite_close($conn);
    }
    public function searchCardFriend($name)
    {
        $this->cardFriendData = array();
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from cardfriend where me = '$name'";
        $result = sqlite_query($conn, $sql);
        while($friend = sqlite_fetch_array($result)) {
            $this->cardFriendData[] = $friend;
        }
        return $this->cardFriendData;
    }
    public function deleteCardFriend($me, $friend)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM cardfriend WHERE me = '$me' AND friend = '$friend'";
        $sql2 = "DELETE FROM cardfriend WHERE me = '$friend' AND friend = '$me'";
        sqlite_query($conn, $sql);
        sqlite_query($conn, $sql2);
        sqlite_close($conn);
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
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "INSERT INTO family(member, familyID) VALUES ('$member', '$familyID')";
        $sql2 = "UPDATE users SET family = '$familyID' WHERE name = '$member'";
        sqlite_query($conn, $sql);
        sqlite_query($conn, $sql2);
        sqlite_close($conn);
    }
    public function searchFamily($familyID)
    {
        $this->familyData = array();
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from family where familyID = '$familyID'";
        $result = sqlite_query($conn, $sql);
        while($family = sqlite_fetch_array($result)) {
            $this->familyData[] = $family;
        }
        return $this->familyData;
    }
    public function deleteFamily($member, $family)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM family WHERE member = '$member' AND familyID = '$family'";
        $sql2 = "UPDATE users SET family = null WHERE name = '$member'";
        sqlite_query($conn, $sql);
        sqlite_query($conn, $sql2);
        sqlite_close($conn);
    }
    //跟訊息有關
    public function addMessage($name, $message, $title)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $datetime = date("Y-m-d/H:i:s", mktime(date('H')+8, date('i'), date('s'), date('m'), date('d'), date('Y')));
        $sql = "INSERT INTO message(name, message, title, time) VALUES ('$name', '$message', '$title', '$datetime')";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    public function searchMessage($title)
    {
        $this->messageData = array();
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from message Where title = '$title'";
        $result = sqlite_query($conn, $sql);
        while($message = sqlite_fetch_array($result)) {
            $this->messageData[] = $message;
        }
        return $this->messageData;
    }
    public function updateMessage($name, $message, $title)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "UPDATE message SET message = '$message' WHERE name = '$name' AND title = '$title'";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    public function deleteMessage($name, $message, $title)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM message WHERE name = '$name' AND message = '$message' AND title = '$title'";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    //跟使用者有關
    public function searchUser($name)
    {
        $this->userData = array();
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "select * from users where name = '$name'";
        $result = sqlite_query($conn, $sql);
        while($user = sqlite_fetch_array($result)){
            $this->userData[] = $user;
        }
        return $this->userData;
    }
    public function updateUser($name, $email, $password, $school, $gender, $birth, $interests, $clubs, $family)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "UPDATE users SET name = '$name', email = '$email', password = '$password', interests = '$interests', clubs = '$clubs' 
        WHERE school = '$school' AND gender = '$gender' AND birth = '$birth' AND family = '$family'";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
    public function deleteUser($name, $email, $password)
    {
        $conn = sqlite_open("tpage");
        sqlite_query($conn, "SET NAMES 'utf8'");
        $sql = "DELETE FROM users WHERE name = '$name' AND email = '$email' AND password = '$password'";
        sqlite_query($conn, $sql);
        sqlite_close($conn);
    }
}