<?php

include("../../mysql_connect.inc.php");

//  $connect = @mysqli_connect($db_server, $db_user, $db_password,$db_name);
mysqli_set_charset($connect,'utf8');

//將資料庫裡的所有會員資料顯示在畫面上

//$sql = "SELECT * FROM `writingData`";
$sql = "SELECT * FROM `experience` ORDER BY tag ASC ";

$result = mysqli_query($connect,$sql);
$num_rows = mysqli_num_rows($result);

echo " 目前共有 $num_rows 項 \n";
?>