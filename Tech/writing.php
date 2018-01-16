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
        .well{
            background: rgb(242,246,248);
            background: -moz-linear-gradient(top, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 22%, rgba(181,198,208,1) 71%, rgba(224,239,249,1) 100%);
            background: -webkit-linear-gradient(top, rgba(242,246,248,1) 0%,rgba(216,225,231,1) 22%,rgba(181,198,208,1) 71%,rgba(224,239,249,1) 100%);
            background: linear-gradient(to bottom, rgba(242,246,248,1) 0%,rgba(216,225,231,1) 22%,rgba(181,198,208,1) 71%,rgba(224,239,249,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f6f8', endColorstr='#e0eff9',GradientType=0 );
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
        <li  ><a data-toggle="tab" href="#menu1">International Conference</a></li>
        <li  ><a data-toggle="tab" href="#menu2">Domestic Conference</a></li>
<!--        <li class="active"><a data-toggle="tab" href="#home">Journal</a></li>-->
<!--        <li ><a data-toggle="tab" href="#menu1">International Conference</a></li>-->
<!--        <li><a data-toggle="tab" href="#menu2">Domestic Conference</a></li>-->

    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">

            <h3>Journal</h3>

<?php
include ("writing_change.php");
include ("writingdata.php");

?>

        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>International Conference</h3>
            <?php
            include ("ic/writing_change.php");
            include ("ic/writingdata.php");

            ?>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Domestic Conference</h3>
            <?php
            include ("dc/writing_change.php");
            include ("dc/writingdata.php");

            ?>
        </div>
        <div id="menu3" class="tab-pane fade">

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


