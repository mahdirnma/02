<?php
require_once "../connection.php";
abstract class Model extends connection {
    public $tablename;
    public $conn;
    public function __construct($table){
        $this->tablename=$table;
        $this->conn=$this->connected();
    }
    public function select(){
        return $this->conn->query("SELECT * FROM ".$this->tablename);
    }
    abstract public function insert($data=[]);
    abstract public function delete($id);
    abstract public function update($data=[]);
}