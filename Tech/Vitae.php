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
            varbar($flag=2); ?>
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
</style>
<hr >
<div class="container">
    <h2>簡歷</h2>
<!--    <p>1</p>-->
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">學歷</a></li>
        <li><a data-toggle="tab" href="#menu1">經歷</a></li>
        <li><a data-toggle="tab" href="#menu2">教學</a></li>
        <li><a data-toggle="tab" href="#menu3">參加團體</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>學歷</h3>
            <p>沙鹿國小 (1972.9-1978.6)</p>
            <p>沙鹿國中 (1978.9-1981.6)</p>
            <p>台中一中 (1981.9-1984.6)</p>
            <p>大同工學院資訊工程系   (1985.9-1989.6)</p>
            <p>中正大學資訊工程所 碩士(1991.9-1993.6)</p>
            <p>中正大學資訊工程所 博士(1993.9-2002.6)</p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>經歷</h3>
            <p> 1988.5  -1989.5  大同公司 網路組工讀</p>
            <p>   1989.7  -1991.5  預官第39期步兵排長 (陸軍步校（受訓）)(陸軍官校（資訊中心少尉教官）)</p>
            <p> 1997.2  -1997.5  第28屆全國大專運動會資訊組 測試規劃負責人</p>
            <p> 1999.12 -2000.4  網路資料庫、程式設計班講師(青輔會委託中正大學辦理，共三梯次)</p>
            <p>2002.8  -2003.1  澎湖技術學院 電算中心 系統作業與支援組 組長</p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>教學</h3>
            <p> 專任副教授	亞洲大學
                2014.8 - 至今</p>


            <p>  專任助理教授	亞洲大學
                2005.8 - 2014.7

                18學期</p>
            <p> 專任助理教授
                臺中健康暨管理學院
                2003.2.1 - 2005.7

                5 學期</p>
            <p>專任講師	澎湖技術學院	2000.8.1 -  2003.1.31	5 學期</p>
            <p>兼任講師
                中正大學
                1995.8.1 - 1997.1.31
                1997.8.1 - 1998.1.31
                1998.8.1 - 2001.1.31
                9 學期</p>
            <p>中國醫藥學院	1997.9 - 1999.7 	4 學期</p>
            <p>協志高職	1996.9 - 1998.2	3 學期</p>
            <p>勤益工專
                1996.8.1 - 1997.1.31
                1997.8.1 - 1998.1.31
                2 學期</p>
            <p>台灣體育學院	1998.8.1 - 1999.1.31 3 學期</p>

        </div>
        <div id="menu3" class="tab-pane fade">
            <h3>參加團體</h3>
            <p>台灣生物資訊學會
                永久會員（2001.10 起）</p>
            <p> 社團法人台灣雲端計算學會

                永久會員 (2011.5.31起)</p>
            <p>台灣生物資訊與系統生物學會
                會員(2012)</p>
        </div>
    </div>
</div>


<br>

<br><br>

<footer class="container-fluid text-center">
    <p>@developing by jun</p>
</footer>
</div>
</body>
</html>


