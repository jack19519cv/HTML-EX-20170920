<?php session_start(); ?>
 <style>

</style>
<?php

include("../../mysql_connect.inc.php");

//  $connect = @mysqli_connect($db_server, $db_user, $db_password,$db_name);
mysqli_set_charset($connect,'utf8');

//將資料庫裡的所有會員資料顯示在畫面上

//$sql = "SELECT * FROM `writingData`";
$sql = "SELECT * FROM `education` ORDER BY tag DESC ";

$result = mysqli_query($connect,$sql);
$num_rows = mysqli_num_rows($result);
if($_SESSION['id'] != null ) {
    $id = $_SESSION['id'];
    echo "<a href='education/writingRe.php'><button class=\"button button1\" >新增</button></a> <br>";
}
echo " 共有 $num_rows 項 \n";
while($row = mysqli_fetch_row($result)) {
    mysqli_set_charset($link, 'utf8');
    ?>

    <div class="col">

           <?php  $count= $row[0]-1;
           $count1=$num_rows-$count;
           ?>
<!--        $count1.-->
            <p style="display: inline;"> <?php echo "   $row[1]" ?></p>
<!--        <p> --><?php //echo " $row[2]" ?><!--</p>-->
            <!--    <p> --><?php //  echo " $row[3]<br><br> " ?><!--</p>-->
            <?php
            if($_SESSION['id'] != null )
            {
            $id = $_SESSION['id'];

            ?>

                <form name="form" method="post" action="education/writing_update.php">
                    <?php
                    echo"<input  type=\"hidden\" name=\"tag\" value=\"$row[0]\" />";
                    ?>
                    <input type="submit" class="button button2" name="button" value="修改" />
                </form>
                <form name="form" method="post" action="education/writing_delete_finish.php">
                    <?php
                    echo"<input  type=\"hidden\" name=\"tag\" value=\"$row[0]\" />";
                    ?>

                    <input type="submit" class="button button3" name="button" value="刪除" onClick="tfm_confirmLink('您真的確定要刪除嗎？');return document.MM_returnValue"/>
<!--                    <input type="submit" class="button button3" name="button" value="刪除" />-->
                </form>


            <?php
            }
            ?>

    </div>


    <?php

}
//            }
?>