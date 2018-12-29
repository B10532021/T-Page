<?php

class Model extends Model_SQL
{
    protected $model;
    private $table = [];

    public function createTable() {

        $this->table = "contents";
        $this->table = "cardname";
    }

    public function __construct()
    {
        if (!$this->table) {

            $this->model = get_class($this);

            $this->model = substr($this->model, 0, -5);

            $this->table = strtolower($this->model);
        }
    }
}
