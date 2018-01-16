<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("../../mysql_connect.inc.php");

$tag = $_POST['tag'];

if($_SESSION['id'] != null)
{
        //新增資料進資料庫語法
        $sql = "delete from student where tag='$tag'";
        if (mysqli_query($connect,$sql)) {
            echo '刪除成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=../student.php>';
        } else {
            echo '刪除失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=../student.php>';
        }

}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=student.php>';
}
?>