<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/cotm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
include ("function_for_GoogleFont.php");
googlefontset(true);
?>
    <style>

    body {
    background: lightblue url("#") no-repeat fixed center;
    }
    textarea style=width:300px;height:100px;
        </style>
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
    ?>
    <body>
    <div class="container">
    <?php
    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[0]\" />(此項目無法修改) <br>";
    echo "email：<input type=\"text\" name=\"email\" value=\"$row[1]\" /> <br>";
    echo "nameC：<input type=\"text\" name=\"nameC\" value=\"$row[2]\" /> <br>";
    echo "nameE：<input type=\"text\" name=\"nameE\" value=\"$row[3]\" /> <br>";
    echo "degree：<input type=\"text\" name=\"degree\" value=\"$row[4]\" /> <br>";
    ?>
<!--    echo "exp：<input type=\"text\" name=\"exp\" size=\"200\" value=\"$row[5]\" /> <br>";-->
<!--    echo "position：<input type=\"text\" name=\"position\" size=\"200\"  value=\"$row[6]\" /> <br>";-->
<!--    echo "officeroom：<input type=\"text\" name=\"office\" size=\"35\" value=\"$row[7]\" /> <br>";-->
<!--    echo "fax：<input type=\"text\" name=\"fax\" size=\"35\" value=\"$row[8]\" /> <br>";-->
        <div class="well">
        exp：<br><textarea name="exp" rows="5" cols="40"><?php echo $row[5];?></textarea><br>
        </div>
        <div class="well">
        position：<br><textarea name="position" rows="5" cols="40"><?php echo $row[6];?></textarea><br>
        </div>
        <div class="well">
        officeroom：<br><textarea name="office" rows="5" cols="40"><?php echo $row[7];?></textarea><br>
        </div>
            <div class="well">
        fax：<br><textarea name="fax" rows="5" cols="40"><?php echo $row[8];?></textarea><br>
            </div>
                <div class="well">
        phone:<br><textarea name="phone" rows="5" cols="40"><?php echo $row[9];?></textarea><br>
                </div>
        <div class="well">
        research:<br><textarea name="research" rows="5" cols="40"><?php echo $row[10];?></textarea><br>
    </div>

<!--//   echo "phone：<input type=\"textbox\"  name=\"phone\" size=\"35\" value=\"$row[9]\" /><br>";-->
<!--//    echo "research：<input type=\"text\" name=\"research\" size=\"100\" value=\"$row[10]\" /> <br>";-->
<!--//    echo "備註：<textarea name=\"other\" cols=\"45\" rows=\"5\">$row[5]</textarea> <br>";-->


        <input type="submit" name="button" value="確定" />
        <?php
    echo "</form>";

}
else
{
    echo '您無權限觀看此頁面!';

    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}


?>
<footer class="container-fluid text-center">
    <p>@developing by jun</p>
</footer>
</div>
</body>