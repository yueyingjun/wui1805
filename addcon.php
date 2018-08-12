<?php
$name=$_GET["name"];
$age=$_GET["age"];
$sex=$_GET["sex"];
include "db.php";
$sql="insert into stu (name,age,sex) values ('{$name}','{$age}','{$sex}')";
$db->query($sql);

include "message.html";