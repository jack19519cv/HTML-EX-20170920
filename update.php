<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/cotm.css">
<link rel="stylesheet" type="text/css" href="Tech/button_css.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
include("function_for_GoogleFont.php");
googlefontset(true);
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script language="JavaScript" type="text/javascript">

    function tfm_confirmLink2(message) { //v1.0
        document.MM_returnValue = confirm(message);
    }
</script>
<style>
    form{margin:0px; display:inline}
    .top-buffer { margin-top:100px; }
    body {
        background: rgb(184,225,252);
        background: -moz-linear-gradient(top, rgba(184,225,252,1) 0%, rgba(162,218,245,1) 4%, rgba(169,210,243,1) 10%, rgba(144,186,228,1) 40%, rgba(144,188,234,1) 51%, rgba(144,191,240,1) 64%, rgba(107,168,229,1) 100%, rgba(189,243,253,1) 100%);
        background: -webkit-linear-gradient(top, rgba(184,225,252,1) 0%,rgba(162,218,245,1) 4%,rgba(169,210,243,1) 10%,rgba(144,186,228,1) 40%,rgba(144,188,234,1) 51%,rgba(144,191,240,1) 64%,rgba(107,168,229,1) 100%,rgba(189,243,253,1) 100%);
        background: linear-gradient(to bottom, rgba(184,225,252,1) 0%,rgba(162,218,245,1) 4%,rgba(169,210,243,1) 10%,rgba(144,186,228,1) 40%,rgba(144,188,234,1) 51%,rgba(144,191,240,1) 64%,rgba(107,168,229,1) 100%,rgba(189,243,253,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b8e1fc', endColorstr='#bdf3fd',GradientType=0 );
    }
    textarea style  =  width:300px  ;
                        height:100px  ;
</style>
<?php
include("mysql_connect.inc.php");
mysqli_set_charset($link, 'utf8');
if ($_SESSION['id'] != null) {
//將$_SESSION['username']丟給$id
//這樣在下SQL語法時才可以給搜尋的值
$id = $_SESSION['id'];
//若以下$id直接用$_SESSION['username']將無法使用
$sql = "SELECT * FROM `profile` where id='$id'";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_row($result);
?>
<body>
<div class="row top-buffer">
<div class="container">
    <form name="form" method="post" action="update_finish.php">
        <div class="form-group">
            <label>帳號:</label>
            <input type="text" name="id" value="<?php echo $row[0]; ?>">
        </div>
        <div class="form-group">
            <label>email:</label>
            <input type="text" name="email" value="<?php echo $row[1]; ?>">
        </div>
        <div class="form-group">
            <label>中文姓名:</label>
            <input type="text" name="nameC" value="<?php echo $row[2]; ?>">
        </div>
        <div class="form-group">
            <label>英文姓名:</label>
            <input type="text" name="nameE" value="<?php echo $row[3]; ?>">
        </div>
        <div class="form-group">
            <label>學歷:</label>
            <input type="text" name="degree" value="<?php echo $row[4]; ?>">
        </div>

<div class="form-group">
    <label>經歷:</label>
    <textarea class="form-control" name="exp"   rows="3"><?php echo $row[5]; ?></textarea>
</div>
<div class="form-group">
    <label>position:</label>
    <textarea class="form-control" name="position"   rows="3"><?php echo $row[6]; ?></textarea>
</div>
<div class="form-group">
    <label>office:</label>
    <textarea class="form-control" name="office"   rows="3"><?php echo $row[7]; ?></textarea>
</div>
<div class="form-group">
    <label>fax:</label>
    <textarea class="form-control" name="fax"   rows="3"><?php echo $row[8]; ?></textarea>
</div>
<div class="form-group">
    <label>phone:</label>
    <textarea class="form-control" name="phone"   rows="3"><?php echo $row[9]; ?></textarea>
</div>
<div class="form-group">
    <label>research:</label>
    <textarea class="form-control" name="research"   rows="3"><?php echo $row[10]; ?></textarea>
</div>

        <input type="submit" class="button button2" name="button" value="確定修改"/>
        <form action="index.php">
        <input type="submit" class="button button5"  value="返回" onClick="tfm_confirmLink2('如果返回將不會保留修改資料!您確定要返回嗎?');return document.MM_returnValue"/>
        </form>
</div>
</div>
<!--<div class="well">-->
<!--    exp：<br><textarea name="exp" rows="5" cols="40">--><?php //echo $row[5]; ?><!--</textarea><br>-->
<!--</div>-->
<!--<div class="well">-->
<!--    position：<br><textarea name="position" rows="5" cols="40">--><?php //echo $row[6]; ?><!--</textarea><br>-->
<!--</div>-->
<!--<div class="well">-->
<!--    officeroom：<br><textarea name="office" rows="5" cols="40">--><?php //echo $row[7]; ?><!--</textarea><br>-->
<!--</div>-->
<!--<div class="well">-->
<!--    fax：<br><textarea name="fax" rows="5" cols="40">--><?php //echo $row[8]; ?><!--</textarea><br>-->
<!--</div>-->
<!--<div class="well">-->
<!--    phone:<br><textarea name="phone" rows="5" cols="40">--><?php //echo $row[9]; ?><!--</textarea><br>-->
<!--</div>-->
<!--<div class="well">-->
<!--    research:<br><textarea name="research" rows="5" cols="40">--><?php //echo $row[10]; ?><!--</textarea><br>-->
<!--</div>-->

<!--//   echo "phone：<input type=\"textbox\"  name=\"phone\" size=\"35\" value=\"$row[9]\" /><br>";-->
<!--//    echo "research：<input type=\"text\" name=\"research\" size=\"100\" value=\"$row[10]\" /> <br>";-->
<!--//    echo "備註：<textarea name=\"other\" cols=\"45\" rows=\"5\">$row[5]</textarea> <br>";-->



<?php
echo "</form>";

}
else {
    echo '您無權限觀看此頁面!';

    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}


?>
<footer class="container-fluid text-center">
    <p>@developing by jun</p>
</footer>
</body>

