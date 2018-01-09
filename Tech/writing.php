<?php
/**
 * Created by PhpStorm.
 * User: jackwang
 * Date: 2017/12/5
 * Time: 下午 02:05
 */

?>
<?php session_start(); ?>
<?php
include("mysql_connect.inc.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>105021059_首頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    include ("../function_for_GoogleFont.php");
    googlefontset(true)
    ?>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {

            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
        #brand-image{

            height: 25px;
        }
        <?php if($_SESSION['id'] != null) {?>
        body {

            background: lightblue url() no-repeat fixed center;
        }
        <?php

        }
                ?>
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://csie.asia.edu.tw/">
                <img id="brand-image" alt="Website Logo" src="pic/csie.png"">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <?php
            include ("../function.php");
            varbar($flag=4); ?>
            <ul class="nav navbar-nav navbar-right">
                <?php    if($_SESSION['id'] != null) {   ?>
                    <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in" ></span> Logout</a></li>
                <?php   }else{?>
                    <li><a href="../login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php   } ?>
            </ul>
        </div>
    </div>
</nav>


<style>
    .container-fluid1 {
        margin-right: auto;
        margin-left: auto;
        padding-left: 100px;
        padding-right: 100px;
    }
    .text-left{
        text-align:left;
    }
    .listc{
        list-style-type: circle;
    }

</style>

<!--<div class="text-left">-->
<hr >
<div class="container">
    <h2>著作</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Journal</a></li>
        <li><a data-toggle="tab" href="#menu1">International Conference</a></li>
        <li><a data-toggle="tab" href="#menu2">Domestic Conference</a></li>
        <?php   if($_SESSION['id'] != null){echo"<li><a data-toggle=\"tab\" href=\"#menu3\">Journal新增</a></li>";
           echo"<li><a data-toggle=\"tab\" href=\"#menu4\">Journal刪除</a></li>";
        }
            $sql = "SELECT * FROM `writingData`";

        $result = mysqli_query($connect,$sql);
            ?>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">

            <h3>Journal</h3>

<?php include ("writing_change.php");
include ("writingdata.php");

?>

        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>International Conference</h3>
            <p>1.Extracting the Co-occurrences of DNA Maximal Repeats in both Human and Viruses
                <span style="font-weight: bolder"> Jing-Doo Wang, </span>Yi-Chun Wang and Rouh-Mei Hu and Jeffrey Tsai
                The 17th IEEE International Conference on BioInformatics and BioEngineering (BIBE 2017), pages 106-111, October 23 – 25, 2017. Washington DC, U.S.A.</p>

            <p>2.A Novel Approach to Improve Quality Control by Comparing the Tagged Sequences of Product Traceability
                <span style="font-weight: bolder"> Jing-Doo Wang,</span>
                2017 The 3rd International Conference on Inventions, 29 September–2 October 2017, Sun Moon Lake, Taiwan</p>

            <p>3.A Novel Approach to Extract Significant Time Intervals of Vehicles from Superhighway Gantry Timestamp Sequences
                <span style="font-weight: bolder"> Jing-Doo Wang,</span> and Ming-Chorng Hwang,
                2017 IEEE International Conference on Applied System Innovation (IEEE ICASI 2017) May 13-17, 2017,Hotel emisia, Sapporo, Japan (First Prize Paper Award) (Extended version submitted to Applied Sciences as a Special Issue "Selected Papers from IEEE ICASI 2017")</p>

        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Domestic Conference</h3>
            <p>1.提升Hadoop MapReduce計算效能之研究-以抽取樣式歷史為例
                陳彥棠、 <span style="font-weight: bolder">王經篤</span>
                2015中華民國系統科學與工程研討會，2015年 7 月17-19日,大同大學</p>

            <p>2.樣式歷史資料之形狀查詢-藉由Haar小波
                <span style="font-weight: bolder">王經篤</span>、蔣中凱、陳瑞奇
                2015年資訊科技國際研討會暨民生電子論壇
                The 9th International Conference on Advanced Information Technologies /
                Consumer Electronics Forum (AIT/CEF 2015), 2015年 4 月24、25 日,朝陽科技大學, pages 1239-1254</p>

            <p>3.社群網站使用者上線時段分析-以批踢踢為例
                郭佳霖、 <span style="font-weight: bolder">王經篤</span>
                2014 數位科技與創新管理研討會,2014年6月14日,華梵大學</p>
        </div>
        <div id="menu3" class="tab-pane fade">
<?php if($_SESSION['id'] != null){
    include ("../writingRe.php");
}
    ?>
        </div>
        <div id="menu4" class="tab-pane fade">
            <?php
            include("writing_delete.php")
            ?>
        </div>


    </div>
</div>

</div>


<br>

<br><br>

<footer class="container-fluid text-center">
    <p>@developing by jun</p>
</footer>


</body>
</html>


