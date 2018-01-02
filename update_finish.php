    <?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");



$id = $_POST['id'];
$email = $_POST['email'];
$nameC = $_POST['nameC'];
$nameE = $_POST['nameE'];
$degree = $_POST['degree'];
$exp = $_POST['exp'];
$position = $_POST['position'];
$office = $_POST['office'];
$fax = $_POST['fax'];
$phone = $_POST['phone'];
$research = $_POST['research'];


if($_SESSION['id'] != null )
{
    $id = $_SESSION['id'];

    //更新資料庫資料語法
    if($id!=null&&$email!=null&&$nameC!=null&& $nameE!=null&&  $degree!=null&& $exp!=null&& $position!=null&& $office!=null&& $fax!=null&& $phone!=null&& $research!=null) {
        $sql = "update `profile` set id='$id' , email='$email', nameC='$nameC', 
         nameE='$nameE', degree='$degree' , experience='$exp',
         position1='$position' , officeroom='$office' ,fax='$fax '  , 	phone='$phone', research='$research' where id='$id'";
    }else{
        if(mysqli_query($connect,$sql)){
            echo '修改失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
    }
    if(mysqli_query($connect,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>