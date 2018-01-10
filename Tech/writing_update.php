<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/cotm.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
include ("../function_for_GoogleFont.php");
?>
<style>

    body {
        background: #e6dba0 url() no-repeat fixed center;
    }
    textarea style=width:300px;height:100px;
</style>
<?php
//include("mysql_connect.inc.php");
//mysqli_set_charset($link,'utf8');


if($_SESSION['id'] != null) {

    $id = $_SESSION['id'];

$sql = "SELECT * FROM `writingData` ORDER BY tag ASC ";
$num_rows = mysqli_num_rows($result);
$num=$row[0];
$tag=$num;

    $sql = "SELECT * FROM `writingData` where tag='$tag'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_row($result);
    $num_rows = mysqli_num_rows($result);
$num=$row[0];
    ?>
<style>
    body {
        background: #f1d9b0 url() no-repeat fixed center;

    }
</style>
    <body>
    <div class="container">

    <?php
    echo "<form name=\"form\" method=\"post\" action=\"writing_update_finish.php\">";

    echo "修改篇章：<input type=\"text\" name=\"tag\" value=\"$row[0]\" />(此為指定項目) <br>";
    ?>

        <div class="well">
        body：<br><textarea name="body" rows="20" cols="80"><?php echo $row[1];?></textarea><br>
        </div>
<?php
        echo "date：<input type=\"text\" name=\"date\" value=\"$row[2]\" /> <br>";
//        echo "type：<input type=\"text\" name=\"type\" value=\"$row[3]\" /> <br>";
?>



        <input type="submit" name="button" value="確定" />

        <?php
    echo "</form>";
  echo"<button><a href='writing.php'>返回</a></button>";
}
else
{
    echo '您無權限觀看此頁面!';

    echo '<meta http-equiv=REFRESH CONTENT=2;url=writing.php>';
}


?>
<footer class="container-fluid text-center">
    <p>@developing by jun</p>
</footer>
</div>
</body>