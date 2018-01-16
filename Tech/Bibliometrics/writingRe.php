<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/cotm.css">
    <link rel="stylesheet" type="text/css" href="../button_css.css">
    <link rel="stylesheet" href="../../bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="../../bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
<?php

include("../../mysql_connect.inc.php");

//  $connect = @mysqli_connect($db_server, $db_user, $db_password,$db_name);
mysqli_set_charset($connect,'utf8');

?>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <script language="JavaScript" type="text/javascript">

        function tfm_confirmLink2(message) { //v1.0
            document.MM_returnValue = confirm(message);
        }
    </script>
    <style>
        form{margin:0px; display:inline}
        .top-buffer { margin-top:60px; }
        body {
            background: rgb(184,225,252);
            background: -moz-linear-gradient(top, rgba(184,225,252,1) 0%, rgba(162,218,245,1) 4%, rgba(169,210,243,1) 10%, rgba(144,186,228,1) 40%, rgba(144,188,234,1) 51%, rgba(144,191,240,1) 64%, rgba(107,168,229,1) 100%, rgba(189,243,253,1) 100%);
            background: -webkit-linear-gradient(top, rgba(184,225,252,1) 0%,rgba(162,218,245,1) 4%,rgba(169,210,243,1) 10%,rgba(144,186,228,1) 40%,rgba(144,188,234,1) 51%,rgba(144,191,240,1) 64%,rgba(107,168,229,1) 100%,rgba(189,243,253,1) 100%);
            background: linear-gradient(to bottom, rgba(184,225,252,1) 0%,rgba(162,218,245,1) 4%,rgba(169,210,243,1) 10%,rgba(144,186,228,1) 40%,rgba(144,188,234,1) 51%,rgba(144,191,240,1) 64%,rgba(107,168,229,1) 100%,rgba(189,243,253,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b8e1fc', endColorstr='#bdf3fd',GradientType=0 );
        }
        textarea style=width:300px;height:100px;
    </style>
<?php   if($_SESSION['id'] != null) {

    $id = $_SESSION['id'];  ?>
    <body>
    <div class="row top-buffer">
        <div class="container">
<?php
include("get_Bibliometrics_size.php");
$count3= $num_rows+1;
?>
<br>


    <form name="form" method="post" action="write_finish.php">
        <input class="form-control" type="hidden" name="tag" value="<?php echo"$count3" ?>"><br>
        <div class="form-group">
            <label> body：</label>
            <textarea class="form-control"  name="body" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label>日期(Date)</label>
            <input type="text" name="date" id='datetime' >
            <script src="../../bootstrap-datetimepicker/sample%20in%20bootstrap%20v3/jquery/jquery-1.8.3.min.js"></script>
            <script src="../../bootstrap-datetimepicker/sample%20in%20bootstrap%20v3/bootstrap/js/bootstrap.min.js"></script>
            <script src="../../bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
            <script type="text/javascript" src="../../bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-TW.js" charset="UTF-8"></script>
            <script >
                $('#datetime').datetimepicker({
                    autoclose:true,
                    todayBtn:true,
                    todayHighlight:true,
                    language:"zh-TW"
                });
            </script>
            <!--                <input type="text" name="date" class="form-control"  value="--><?php //echo $row[2]; ?><!--">-->
        </div>

        <input type="submit" class="button button2" name="button" value="確定新增" />
    </form>
            <form action="../Academic.php">

                <input type="submit" class="button button5"  value="返回" onClick="tfm_confirmLink2('如果返回將不會保留新增資料!您確定要返回嗎?');return document.MM_returnValue"/>

            </form>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <p>@developing by jun</p>
    </footer>

    </body>
<?php }else
    {
        echo '您無權限觀看此頁面!';

        echo '<meta http-equiv=REFRESH CONTENT=2;url=../Academic.php>';
    }
//將資料庫裡的所有會員資料顯示在畫面上
$sql = "SELECT * FROM `Bibliometrics  ` ";

$result = mysqli_query($connect,$sql);

//            }
?>