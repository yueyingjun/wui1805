<?php
sleep(3);
$id=$_GET["id"];
include "db.php";
$result=$db->query("select * from stu where id=".$id);
$row=$result->fetch_assoc();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="editcon.php">
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
    name: <input type="text" name="name" value="<?php echo $row['name']?>"><br>
    age: <input type="text" name="age" value="<?php echo $row['age']?>"><br>
    sex: <input type="text" name="sex" value="<?php echo $row['sex']?>"><br>
    <input type="submit" value="提交">
</form>
</body>
</html>
