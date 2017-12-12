<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:15
 */
$n = $_POST['n'];
$s = $_POST['s'];
$r = $_POST['r'];
$g = $_POST['g'];
$b = $_POST['b'];

$o=0;
?>
<!DOCTYPE html>
<html lang="en" xmlns:margin-right="http://www.w3.org/1999/xhtml">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">


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
    <table border="1" width="50%" style='background: rgb(200,100,100)'  >
        <?php
        for($i=1;$i<$n;$i++){
            echo "<tr>";
            for($j=1;$j<$s;$j++){
                $o=$i*$j;
                echo "<td><span style='text-align: center'  ><h1> $o</h1><span></td>";

            }
            echo "</tr>";
        }
        ?>
    </table>
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
            <a class="navbar-brand" href="http://asia.edu.tw/   ">學校首頁</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">首頁</a></li>
                <li><a href="Tech/Vitae.html">簡歷</a></li>
                <li><a href="Tech/Academic.html">學術</a></li>
                <li><a href="#">著作</a></li>
                <li><a href="#">學生</a></li>
                <li><a href="#">常用連結</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <div class="container-fluid1    bg-3 text-center">

        <br>
        <div class="row">
            <div class="col-sm-4">



            </div>

            <div class="col-sm-2">




            </div>
            <div class="col-sm-6">
                <div class="row">
                    <p>  地址：41354 台中市霧峰區柳豐路500號</p>
                    <p>  電話：04-2332-3456 ext:1847</p>


                    <p> FAX :  04-2332-5737</p>
                    <p> E-mail: jdwang@asia.edu.tw</p>
                    <p> 網頁：http://dns2.asia.edu.tw/~jdwang</p>
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
<style>
    .container-fluid1 {

        text-align: center;
        display: block;
        margin-right: 0;
        margin-left: 0;
        padding-left: 100px;
        padding-right: 100px;
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
</html>
