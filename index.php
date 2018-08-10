<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<?php

/*
 *
 *  基于  c/s  即时相应  数据不及时
 *
 *  基于  B/S  实时数据  相应有延迟
 *
 *
 *   b/s 实时数据   解决由于响应延迟带来的不良的体验  ajax
 *
 * */

sleep(3);
include "db.php";
$sql="select * from stu";
$result=$db->query($sql);


?>
<script>


</script>
<body>
    <a href="add.php">添加</a>

  <table>
      <tr>
          <th>id</th>
          <th>name</th>
          <th>sex</th>
          <th>age</th>
          <th>操作</th>
      </tr>
      <?php
      while ($row=$result->fetch_assoc()) {

          ?>
        <tr>
            <td>

                <?php
                 echo $row["id"]
                ?>
            </td>
            <td>
                <?php
                echo $row["name"]
                ?>
            </td>
            <td>
                <?php
                echo $row["sex"]
                ?>
            </td>
            <td>
                <?php
                echo $row["age"]
                ?>

            </td>
            <td>
                <a href="del.php?id=<?php echo $row["id"]?>">删除</a>
                <a href="edit.php?id=<?php echo $row["id"]?>">编辑</a>
            </td>
        </tr>
          <?php
      }
      ?>


  </table>

</body>
</html>