<?php
class Model_SQL
{
    protected $table;

    protected $primary = 'id';

    private $param = array();

    private $state;

    private function getData() {

        $conn = mysqli_connect("localhost:33060","root","root");

        //設定連線編碼
        mysqli_query( $conn, "SET NAMES 'utf8'");
        $sql = "select * from tpage.member";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_fetch_row($result);
}

    public function getState() {

        return $this->state;
    }

    public function setState($aState) {

        $this->state = $aState;
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

    public function readData() {


    }

    public function createTable() {


    }
}