<?php

include("../../mysql_connect.inc.php");

//  $connect = @mysqli_connect($db_server, $db_user, $db_password,$db_name);
mysqli_set_charset($connect,'utf8');
if($_SESSION['id'] != null)
{
//    echo ' <a href="writing_update.php">修改</a>   <br>';

}
//將資料庫裡的所有會員資料顯示在畫面上
$sql = "SELECT * FROM `teaching`  ";

$result = mysqli_query($connect,$sql);

//            }
?>