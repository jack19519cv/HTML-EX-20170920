<?php

include("mysql_connect.inc.php");

//  $connect = @mysqli_connect($db_server, $db_user, $db_password,$db_name);
mysqli_set_charset($connect,'utf8');
if($_SESSION['id'] != null)
{
//                echo '<a href="register.php">新增</a>    ';
    echo '<a href="w.php">修改</a>    <br>';
//                echo '<a href="delete.php">刪除</a>  <br>';
}
//將資料庫裡的所有會員資料顯示在畫面上
$sql = "SELECT * FROM `writingData` ";

$result = mysqli_query($connect,$sql);

//            }
?>