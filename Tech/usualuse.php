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
/*bg test*/
* { box-sizing: border-box; }
.video-background {
    background: #000;
    position: fixed;
    top: 0; right: 0; bottom: 0; left: 0;
    z-index: -99;
}
.video-foreground,
.video-background iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}
#vidtop-content {
    top: 0;
    color: #fff;
}
.vid-info { position: absolute; top: 0; right: 0; width: 33%; background: rgba(0,0,0,0.3); color: #fff; padding: 1rem; font-family: Avenir, Helvetica, sans-serif; }
.vid-info h1 { font-size: 2rem; font-weight: 700; margin-top: 0; line-height: 1.2; }
.vid-info a { display: block; color: #fff; text-decoration: none; background: rgba(0,0,0,0.5); transition: .6s background; border-bottom: none; margin: 1rem auto; text-align: center; }
@media (min-aspect-ratio: 16/9) {
    .video-foreground { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
    .video-foreground { width: 300%; left: -100%; }
}
@media all and (max-width: 600px) {
    .vid-info { width: 50%; padding: .5rem; }
    .vid-info h1 { margin-bottom: .2rem; }
}
@media all and (max-width: 500px) {
    .vid-info .acronym { display: none; }
}
/*bg test*/

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
<div class="video-background">
    <div class="video-foreground">

        <iframe src="https://www.youtube.com/embed/8_2SJvPzp6o?vq=hd720&controls=0&showinfo=0&rel=0&autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<!--test-->
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
            varbar($flag=6); ?>
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
<!--                <ul class="nav nav-pills">-->
<!--                    <li class="active" ><a href="writing.php">Journal</a></li>-->
<!--                </ul>-->
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>

<!--<div class="text-left">-->
<!--<hr >-->
<!--<div class="container">-->
<!---->
<!--    <div class="col-sm-3">-->
<!--        <div class="row">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-sm-6">-->
<!--        <div class="row">-->
<!---->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--    <div class="col-sm-3">-->
<!--        <div class="row">-->
<!---->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <br>-->
<!--</div>-->

<div class="container">
    <h2 style="text-align: center; font-weight: bolder; color: #f9f9f9">常用連結</h2>

    <table class="table">
        <thead>
<!--        <tr>-->
<!--          <th>Firstname</th>-->
<!--            <th style="font-size: 2em">常用連結</th>-->
<!--            <th>Email</th>-->
<!--        </tr>-->
        </thead>
        <tbody>
        <tr class="info">

            <td><a href="http://www.facebook.com/">Facebook</a></td>
            <td><a href="https://code.google.com/p/windoop/" >Hadoop</a></td>
            <td><a href="https://www.google.com.tw/">Google</a></td>

        </tr>
        <tr class="warning" >

            <td style="text-align: right"><img style="width: 20px; height: 20px; " alt="Image" src="pic/arrow-down.png" ></td>
            <td >English Learning <img style="width: 20px;height: 20px; text-align: left"  alt="Image" src="pic/arrow-down.png" ></td>
            <td></td>

        </tr>
        <tr class="active">
            <td><a href="https://www.liveabc.com/site/Online_Store/member/ok3.asp">LiveABC</a></td>
            <td><a href="http://mws.ust.hk/mw/account/login.php">My Words</a></td>
            <td><a href="http://wordneighbors.ust.hk/">Word Neighbors</a></td>

        </tr>
        <tr class="info">
            <td><a href="http://egg.ust.hk/cl3/index.html">EGG ( English Grammar Guide)</a></td>
            <td><a href="http://www.ted.com/">TED (Technology, Entertainment, Design)</a></td>
            <td><a href="http://quod.lib.umich.edu/m/micase/">MICASE</a>(Michigan Corpus of Academic Spoken English)</td>

        </tr>
        <tr class="active" >
            <td><a href="http://www.pbs.org/">PBS</a>(Public Broadcasting Service)</td>
            <td><a href="http://hk.dictionary.yahoo.com/">Yahoo!字典</a></td>
            <td><a href="http://www.netspeak.org/">netspeak</a></td>


        </tr>
        <tr class="info">
            <td><a href="http://www.onlinedict.com/">顏氏美語</a></td>
            <td><a href="http://dictionary.sina.com.tw/">新浪字典</a></td>
            <td><a href="http://cdict.net/">英漢字典(English-Chinese Dictionary</a></td>

        </tr>
        <tr class="active">
            <td><a href="https://fitbir-demo.cit.nih.gov/">Federal Interagency TBI Research (FITBIR) Informatics System</a></td>
            <td><a href="https://www.draw.io/">https://www.draw.io/</a></td>
            <td><a href="http://www.citeulike.org/bibtex_options">BibTeX Export</a></td>

        </tr>
        <tr class="info">
            <td><a href="http://www.citeulike.org/">citeulike</a></td>
            <td><a href="https://www.most.gov.tw/">科技部</a></td>
            <td><a href="http://dns2.asia.edu.tw/~jdwang/project/evaluating_the_fitness_of_class.htm">Project</a></td>

        </tr>
        <tr class="active">
            <td><a href="http://www.asia.edu.tw/">亞洲大學</a></td>
            <td><a href="http://cip.asia.edu.tw/login.php">校園入口網站</a></td>
            <td><a href="https://sslvpn9.twaren.net/dana-na/auth/%28asia%29url_default/welcome.cgi">亞洲大學SSL VPN</a></td>

        </tr>
        <tr class="info">
        <td><a href="http://study.asia.edu.tw/">讀書會/學習社群Learning Groups</a></td>
        </tr>
        </tbody>
    </table>
</div>



<br>

<br><br>



<footer class="container-fluid text-center">
    <p>@developing by jun</p>
</footer>



</body>
</html>


