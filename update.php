<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
mysqli_set_charset($link,'utf8');
if($_SESSION['id'] != null) {
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id = $_SESSION['id'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM `profile` where id='$id'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_row($result);
    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[0]\" />(此項目無法修改) <br>";
    echo "email：<input type=\"text\" name=\"email\" value=\"$row[1]\" /> <br>";
    echo "nameC：<input type=\"text\" name=\"nameC\" value=\"$row[2]\" /> <br>";
    echo "nameE：<input type=\"text\" name=\"nameE\" value=\"$row[3]\" /> <br>";
    echo "degree：<input type=\"text\" name=\"degree\" value=\"$row[4]\" /> <br>";
    echo "exp：<input type=\"text\" name=\"exp\" value=\"$row[5]\" /> <br>";
    echo "position：<input type=\"text\" name=\"position\" value=\"$row[6]\" /> <br>";
    echo "officeroom：<input type=\"text\" name=\"office\" value=\"$row[7]\" /> <br>";
    echo "fax：<input type=\"text\" name=\"fax\" value=\"$row[8]\" /> <br>";
    echo "phone：<input type=\"text\" name=\"phone\" value=\"$row[9]\" /> <br>";
    echo "research：<input type=\"text\" name=\"research\" value=\"$row[10]\" /> <br>";
//    echo "備註：<textarea name=\"other\" cols=\"45\" rows=\"5\">$row[5]</textarea> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
}
else
{
    echo '您無權限觀看此頁面!';

    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>