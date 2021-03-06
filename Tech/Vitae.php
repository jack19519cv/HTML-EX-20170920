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
include("../mysql_connect.inc.php");

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
    <?php if($_SESSION['id'] != null) {
        include("../CSS/dashboard_bg_add.php");

        ?>
        <?php

    }else{
        include("../CSS/base_bg_add.php");
    }
    ?>
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
            <?php
            include ("education/writing_change.php");
            include ("education/writingdata.php");

            ?>


        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>經歷</h3>
            <?php
            include ("experience/writing_change.php");
            include ("experience/writingdata.php");

            ?>

        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>教學</h3>
            <?php
            include ("teaching/writing_change.php");
            include ("teaching/writingdata.php");

            ?>
        </div>
        <div id="menu3" class="tab-pane fade">
            <h3>參加團體</h3>
            <?php
            include ("groups/writing_change.php");
            include ("groups/writingdata.php");

            ?>
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


