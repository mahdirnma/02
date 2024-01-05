<?php
require_once "Cars.php";
$name=$_POST["title"];
$brand=$_POST["brand"];
$car=new car("Cars");
$car->insert(["name"=>$name,
    "brand"=>$brand]);
header("Location:index.php");