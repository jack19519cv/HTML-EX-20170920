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

<html lang="en" xmlns:margin-right="http://www.w3.org/1999/xhtml">
<head>
    <title>105021059_首頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    include ("function_for_GoogleFont.php");
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
    </style>

</head>
<body>
<div style="  font-family: 'Noto Sans TC', sans-serif;">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://asia.edu.tw/   ">學校首頁</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php



                include ("function.php");
            varbar($flag=1);

            ?>
            <ul class="nav navbar-nav navbar-right">


                <?php    if($_SESSION['id'] != null)
                {      ?>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in" ></span> Logout</a></li>
                <?php   }else{
                   ?>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php   }
                   ?>

            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
        <div class="container-fluid1    bg-3 text-center">
        <br>
        <div class="row">
            <div class="col-sm-4"  >
                <img src="Tech/pic/910100540_jdwang_2011_12_7.jpg"   class="img-rounded" alt="Cinque Terre"  >
            </div>

            <div class="col-sm-2">
                <div class="row">
                    <h1 >王經篤</h1>
                    <p> 亞洲大學 資訊工程系 副教授</p>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <p>  地址：41354 台中市霧峰區柳豐路500號</p>
                    <p>  電話：04-2332-3456 ext:1847</p>
                    <p> FAX :  04-2332-5737</p>
                    <p> E-mail: jdwang@asia.edu.tw</p>
                    <p> 網頁：<a href="http://dns2.asia.edu.tw/~jdwang">http://dns2.asia.edu.tw/~jdwang</a></p>
                </div>
            </div>

        </div>
    </div>
    <!--<div class="container text-center">-->
    <!---->
    <!---->
    <!---->
    <!--</div>-->
</div>
</div>
<style>
    .container-fluid1 {

        text-align: center;
        display: block;
        margin-right: 0;
        margin-left: 0;
        padding-left: 180px;
        padding-right: 180px;
    }
</style>
<style>
    p1 {
        font-size: 1.8em;
        margin: 0px 70px 0px 0px;
    }
</style>
<br>

<br><br>

<footer class="container-fluid text-center">
    <p>ａｓｉａ</p>
</footer>

</body>


