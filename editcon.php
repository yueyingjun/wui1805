<?php
sleep(3);
$id=$_GET["id"];
$name=$_GET["name"];
$age=$_GET["age"];
$sex=$_GET["sex"];

include "db.php";
$sql="update stu set name='{$name}',age='{$age}',sex='{$sex}' where id=".$id;



$db->query($sql);

include "message.html";