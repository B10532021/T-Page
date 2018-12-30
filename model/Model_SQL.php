<?php
class Model_SQL
{
    protected $table;
    protected $primary = 'id';
    private $param = array();

    private $state;
    private $data = array();

    private function getDBData()
    {
        $conn = mysqli_connect("localhost:33060","root","root");
        //設定連線編碼
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from t_page.member";
        $result = mysqli_query($conn, $sql);
        $this->data = mysqli_fetch_row($result);
    }
    public function getState()
    {
        return $this->state;
    }
    public function setState($aState)
    {
        $this->state = $aState;
    }
    public function addArticle($title, $board, $author, $content)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "t_page");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO articles(title, board, author, content) VALUES ('$title', '$board', '$author', '$content')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function searchArticle()
    {
        $this->getDBData();
        return $this->data[0];
    }
    public function addBoard($ECE, $TAA)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "t_page");
        mysqli_query( $conn, "SET NAMES 'utf8");
        if($ECE == "ECE1")
        {
            $sql = "INSERT INTO board(ECE1, ECE2, ECE3, ECE4) VALUES ('$TAA', , ,)";
        }
        else if($ECE == "ECE2")
        {
            $sql = "INSERT INTO board(ECE1, ECE2, ECE3, ECE4) VALUES ( ,'$TAA', , )";
        }
        else if($ECE == "ECE3")
        {
            $sql = "INSERT INTO board(ECE1, ECE2, ECE3, ECE4) VALUES ( , , '$TAA', )";
        }
        else if($ECE == "ECE4")
        {
            $sql = "INSERT INTO board(ECE1, ECE2, ECE3, ECE4) VALUES ( , , ,'$TAA')";
        }
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function searchBoard()
    {
        $this->getDBData();
        return $this->data[1];
    }
    public function addMessage($name, $message, $board)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "t_page");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO message(name, message, board) VALUES ('$name', '$message', '$board')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function searchMessage()
    {
        $this->getDBData();
        return $this->data[2];
    }
    public function addUser($name, $school, $gender, $birth, $interests, $clubs, $family)
    {
        $conn = mysqli_connect("localhost:33060", "root", "root");
        mysqli_select_db($conn, "t_page");
        mysqli_query( $conn, "SET NAMES 'utf8");
        $sql = "INSERT INTO users(name, school, gender, birth, interests, clubs, family) VALUES ('$name', '$school', '$gender', '$birth', '$interests', '$clubs', '$family')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function searchUser()
    {
        $this->getDBData();
        return $this->data[3];
    }

    public function add($data)
    {
        $sql = sprintf("insert into `%s `%s", $this->table, $this->formatInsert($data));
        $sth = DB::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, $data);
        $sth = $this->formatParam($sth, $this->param);
        $sth->execute();

        return $sth->rowCount();
    }
    private function formatInsert($data)
    {
        $fields = array();
        $names = array();
        foreach ($data as $key => $value) {

            $fields[] = sprintf("`%s`", $key);
            $names[] = sprintf(":%s", $key);
        }

        $field = implode(',', $fields);
        $name = implode(', ', $names);

        return sprintf("(%s) values (%s)", $field, $name);
    }
    public function formatParam(PDOStatement $sth, $params = array())
    {
        foreach ($params as $param => &$value) {

            $param = is_int($param) ? $param + 1 : ':' . ltrim($param, ':');
            $sth->bindParam($param, $value);
        }
        return $sth;

    }
}
