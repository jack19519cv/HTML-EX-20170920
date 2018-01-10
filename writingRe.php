<?php

include("mysql_connect.inc.php");

//  $connect = @mysqli_connect($db_server, $db_user, $db_password,$db_name);
mysqli_set_charset($connect,'utf8');
include("Tech/get_journal_size.php");
?>
    <form name="form" method="post" action="../write_finish.php">
        編號(題目)：<input type="text" name="tag" /> <br><br>
        <div class="well">
            body：<br><textarea name="body" cols="80" rows="10"></textarea> <br>
        </div>
        date：<input type="text" name="date" /> <br>
<!--        type：<input type="text" name="type" /> <br><br>-->

        <input type="submit" name="button" value="確定" />
    </form>
<?php
//將資料庫裡的所有會員資料顯示在畫面上
$sql = "SELECT * FROM `writingData` ";

$result = mysqli_query($connect,$sql);

//            }
?>