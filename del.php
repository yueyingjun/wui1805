<?php
sleep(3);
$id=$_GET["id"];
$sql="delete from stu where id=$id";
include "db.php";
$db->query($sql);

include "message.html";