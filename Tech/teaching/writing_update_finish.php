    <?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../../mysql_connect.inc.php");



$tag = $_POST['tag'];
$body = $_POST['body'];
$date = $_POST['date'];
//$type = $_POST['type'];


if($_SESSION['id'] != null )
{
    $id = $_SESSION['id'];

    //更新資料庫資料語法
//    && $type!=null
//    ,  type='$type' &&$date!=null
    if($tag!=null&&$body!=null) {
        $sql = "update `teaching`  set tag='$tag' , body='$body', date='$date' WHERE tag='$tag' ";
    }else{
        if(mysqli_query($connect,$sql)){
            echo '修改失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=../Vitae.php>';
        }
    }
    if(mysqli_query($connect,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../Vitae.php>';
    }
    else
    {
        echo '修改失敗!_not allow null';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../Vitae.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=../Vitae.php>';
}
?>