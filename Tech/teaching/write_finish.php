<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("../../mysql_connect.inc.php");

$tag = $_POST['tag'];
$body = $_POST['body'];
$date = $_POST['date'];
//$type = $_POST['type'];

if($_SESSION['id'] != null ) {
    $id = $_SESSION['id'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
//    && $type != null
    if ( $tag != null&& $body  != null   ) {
        //新增資料進資料庫語法
//        , type
//
        $sql = "INSERT INTO teaching (tag, body, date, type) VALUES ('$tag','$body','$date' ,'$type')";
        if (mysqli_query($connect,$sql)) {
            echo '新增成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=../Vitae.php>';
        } else {
            echo '新增失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=../Vitae.php>';
        }
    }else{
        echo '新增失敗!NULL';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=../Vitae.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=../Vitae.php>';
}
?>