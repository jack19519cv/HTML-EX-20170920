<?php

include("mysql_connect.inc.php");

//  $connect = @mysqli_connect($db_server, $db_user, $db_password,$db_name);
mysqli_set_charset($connect,'utf8');
if($_SESSION['id'] != null)
{
//                echo '<a href="register.php">新增</a>    ';
    echo '<a href="update.php"><button class="button1">編輯基本資料 </button></a>   <br>';
//                echo '<a href="delete.php">刪除</a>  <br>';
}
//將資料庫裡的所有會員資料顯示在畫面上
$sql = "SELECT * FROM `profile`  ";

$result = mysqli_query($connect,$sql);

//            }
?>