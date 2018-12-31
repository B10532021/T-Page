<?php
class Model_SQL
{
    private $articleID = 1;
    private $userID = 1;
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
    public function addAdvertisement($title, $content)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO advertisement(title, billboard) VALUES ('$title', '$content')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    private function getAdvertisementData($title)
    {
        $this->advertisementData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from tpage.advertisement where title = '$title'";
        $result = mysqli_query($conn, $sql);
        while($advertisement = mysqli_fetch_row($result)) {
            $this->advertisementData[] = $advertisement;
        }
    }
    public function searchAdvertisement($title)
    {
        $this->getAdvertisementData($title);
        return $this->advertisementData;
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
    private function getArticleData($title)
    {
        $this->articleData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        //設定連線編碼
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from tpage.articles where title = '$title'";
        $result = mysqli_query($conn, $sql);
        while($article = mysqli_fetch_row($result)) {
            $this->articleData[] = $article;
        }
    }
    public function searchArticle($title)
    {
        $this->getArticleData($title);
        return $this->articleData;
    }
    public function getArticleID($title)
    {
        $this->searchArticle($title);
        return $this->articleData[4];
    }
    //跟看板有關
    private function getBoardData($board)
    {
        $this->boardData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from tpage.articles where board = '$board'";
        $result = mysqli_query($conn, $sql);
        while($board = mysqli_fetch_row($result)) {
            $this->boardData[] = $board;
        }
    }
    public function searchBoard($board)
    {
        $this->getBoardData($board);
        return $this->boardData;
    }
    //跟卡友有關
    public function addCardFriend()
    {
        return true;
    }
    public function becomeCardFriend($me, $friend)
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
    private function getCardFriendData($name)
    {
        $this->cardFriendData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from tpage.cardfriend where me = '$name'";
        $result = mysqli_query($conn, $sql);
        while($friend = mysqli_fetch_row($result)) {
            $this->cardFriendData[] = $friend;
        }
    }
    public function searchCardFriendData($name)
    {
        $this->getCardFriendData($name);
        return $this->cardFriendData[1];
    }
    //跟家族有關
    public function addFamily()
    {
        return true;
    }
    public function allowEnterFamily()
    {
        return true;
    }
    public function jointFamily($member, $familyID)
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
    private function getFamilyData($familyID)
    {
        $this->familyData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from tpage.family where familyID = '$familyID'";
        $result = mysqli_query($conn, $sql);
        while($family = mysqli_fetch_row($result)) {
            $this->familyData[] = $family;
        }
    }
    public function searchFamily($familyID)
    {
        $this->getFamilyData($familyID);
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
    private function getMessageData($article_ID)
    {
        $this->messageData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        //設定連線編碼
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from tpage.message where articleID = '$article_ID'";
        $result = mysqli_query($conn, $sql);
        while($message = mysqli_fetch_row($result)) {
            $this->messageData[] = $message;
        }
    }
    public function searchMessage($article_ID)
    {
        $this->getMessageData($article_ID);
        return $this->messageData;
    }
    //跟使用者有關
    public function addUser($name, $school, $gender, $birth, $interests, $clubs, $family)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "tpage");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO users(name, school, gender, birth, interests, clubs, family, userID) VALUES ('$name', '$school', '$gender', '$birth', '$interests', '$clubs', '$family', $this->userID)";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        $this->userID++;
    }
    private function getUserData($name = null)
    {
        $this->userData = array();
        $conn = mysqli_connect("localhost:33060","root","root");
        //設定連線編碼
        mysqli_query( $conn, "SET NAMES 'utf8'");
        if($name == null)
        {
            $sql = "select * from tpage.users";
        }
        else{
            $sql = "select * from tpage.users where name = '$name'";
        }
        $result = mysqli_query($conn, $sql);
        while($user = mysqli_fetch_row($result)){
            $this->userData[] = $user;
        }
    }
    public function searchUserData($name)
    {
        $this->getUserData($name);
        return $this->userData;
    }
    public function getUserID($name)
    {
        $this->searchUserData($name);
        return $this->articleData[7];
    }
}
