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
<div class="container-fluid1    bg-3 text-center">

    <div class="container">

        <div class="col-sm-4">
            <div class="row">
                <ul class="nav nav-pills">

                </ul>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <ul class="nav nav-pills">
                    <li class="active" ><a href="writing.html">Journal</a></li>
                    <li ><a href="wr/ic.html">International Conference</a></li>
                    <li ><a href="wr/dc.html">Domestic Conference</a></li>
                </ul>
            </div>



        </div>
    </div>
</div>
<!--<div class="text-left">-->
<hr >
<div class="container">

    <div class="col-sm-3">
        <div class="row">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="row">

            <p>1.A Novel Approach to Extract Significant Time Interval Patterns of Vehicles from Freeway Gantry Timestamp Sequences
                <span style="font-weight: bolder"> Jing-Doo Wang</span> and Ming-Chorng Hwang
                Applied Sciences, 2017, 7(9), 878; doi:10.3390/app7090878. (SCIE, IF=1.679)
                (Special Issue "Selected Papers from IEEE ICASI 2017")</p>

            <p>2.Extracting Significant Pattern Histories from Timestamped Texts using MapReduce
                <span style="font-weight: bolder">Jing-Doo Wang</span>
                Journal of Supercomputing, 72(8), pp. 3236-3260, DOI 10.1007/s11227-016-1713-z,, April 2016
                (SCI, SCIE 2014 JCR ,IF=0.858,RANK=56/102, COMPUTER SCIENCE, THEORY & METHODS)</p>

            <p>3.Shape Query for Pattern History in PubMed Literatures via Haar Wavelet
                <span style="font-weight: bolder">Jing-Doo Wang</span>Zhong-Kai Jiang,Jui-Chi Chen
                International Journal of Advanced Information Technologies(IJAIT), Vol. 9 ;No. 6. pp. 67-76, December 2015.</p>




        </div>

    </div>
    <div class="col-sm-3">
        <div class="row">


        </div>
    </div>

    <br>
</div>
</div>


<br>

<br><br>

<footer class="container-fluid text-center">
    <p>ａｓｉａ</p>
</footer>


</body>
</html>


