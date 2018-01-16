<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
include("../../mysql_connect.inc.php");

$tag = $_POST['tag'];
$schoolyear= $_POST['schoolyear'];
$department= $_POST['department'];
$name= $_POST['name'];
	$thesis= $_POST['thesis'];
    $remark= $_POST['remark'];
    //$body = $_POST['body'];
//$date = $_POST['date'];
////$type = $_POST['type'];
if ($_SESSION['id'] != null) {
    $id = $_SESSION['id'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
//    && $type != null
    if ($tag != null && $schoolyear != null && $department!=null && $name!=null) {
        //新增資料進資料庫語法
//        , type
//
        $sql = "INSERT INTO student (tag, schoolyear, department, name, thesis, remar k) VALUES ('$tag', '$schoolyear', '$department', '$name','$thesis','$remark')";
        if (mysqli_query($connect, $sql)) {
            echo '新增成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=../student.php>';
        } else {
            echo '新增失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=../student.php>';
        }
    } else {
        echo '新增失敗!NULL 學年 系所 名子不可輸入空值';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../student.php>';
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=../student.php>';
}
?>