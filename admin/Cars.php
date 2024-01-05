<?php
require_once "Model.php";
class car extends Model{

    public function insert($data = [])
    {
        $this->conn->exec("INSERT INTO `cars`(`title`, `brands_id`) VALUES ('{$data["name"]}','{$data["brand"]}')");
    }

    public function delete($id)
    {
    }

    public function update($data = [])
    {
    }
    public function selectSpecial()
    {
        return $this->conn->query("SELECT Cars.id,Cars.title,Brands.title as 'brand',Brands.country FROM `Cars` INNER JOIN `Brands` 
    ON `Cars`.brands_id=`Brands`.id");
    }
}