<?php session_start(); ?>
<?php

include("../mysql_connect.inc.php");

//  $connect = @mysqli_connect($db_server, $db_user, $db_password,$db_name);
mysqli_set_charset($connect,'utf8');

//將資料庫裡的所有會員資料顯示在畫面上

//$sql = "SELECT * FROM `writingData`";
$sql = "SELECT * FROM `writingData` ORDER BY tag ASC ";

$result = mysqli_query($connect,$sql);
$num_rows = mysqli_num_rows($result);

echo " 共有 $num_rows 篇 \n";
while($row = mysqli_fetch_row($result)) {
    mysqli_set_charset($link, 'utf8');
    ?>

    <div class="col">
        <div class="well">

            <p> <?php echo " $row[0].  $row[1]" ?></p>
            <p> <?php echo " $row[2]<br> " ?></p>
            <!--    <p> --><?php //  echo " $row[3]<br><br> " ?><!--</p>-->
            <?php
            if($_SESSION['id'] != null )
            {
            $id = $_SESSION['id'];

            ?>

                <form name="form" method="post" action="writing_update.php">

            <a type="submit" href="writing_update.php">修改</a>
                </form>
            <?php
            }
            ?>
        </div>
    </div>


    <?php

}
//            }
?>