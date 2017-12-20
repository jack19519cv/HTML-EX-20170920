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
            varbar($flag=3); ?>
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
    .lists{
        list-style-type: square;
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
                    <li class="active"><a href="Academic.html">Text Mining</a></li>
                    <li ><a href="acaco/Bibliometrics.html">Bibliometrics</a></li>

                </ul>
            </div>



        </div>
    </div>
</div>
<!--<div class="text-left">-->
<hr >
<div class="container">
    <h2>Dynamic Tabs</h2>
    <p>Todo</p>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Text Mining</a></li>
        <li><a data-toggle="tab" href="#menu1">Bibliometrics</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <ul>
                <span style="  font-size:2em ;"> <li >Text Mining</li></span>
                <li style="list-style-type: circle"><a href="http://dns2.asia.edu.tw/~jdwang/corpus.htm">Corpus</a></li>
                <li style="list-style-type: circle"  ><span style="font-weight: bold"><a href="http://dns2.asia.edu.tw/~jdwang/text_archaeology.htm">Text Archaeology</a> (文件考古學)</span> (diachronic corpora)(historical corpora)</li>
                <div class="lists">
                    <li > Pattern History</li>
                    <li > PubMed</li>
                    <li > CNA</li>
                    <li > The Patents in R.O.C</li>

                    <br/>
                    <li> Term History Mining</li>
                    <li> Phrase History Mining</li>
                    <li>  Event History Mining.</li>
                    <li><a href="https://goo.gl/k4sTsv">Text Mining Resource</a> </li>
                    <li><a href="https://goo.gl/1gfwW6">OpView</a></li>
                    <li><a href="https://goo.gl/ffjeUu">巨鷗科技股份有限公司</a></li>
                    <li> neologism(<span style="font-weight: bold">新詞; 新義</span>)</li>
                    <li style="list-style-type: circle"> <span style="font-weight: bold">(</span>by  <a href="https://goo.gl/3NuW16">Tavish Srivastava</a><span style="font-weight: bold">)</span> <br/>(<span style="font-weight: bold; font-size: 1.2em"><a href="https://goo.gl/4Um5BN"> Having the right dictionary is at the heart of any text mining analysis.</a></span>)</li>
                    <li style="list-style-type: circle">Biomedical literature mining</li>
                    <li> 中研院</li>
                    <li><a href="https://goo.gl/S528Rh">Biological Literature Mining(Prof Wen-Lian Hsu)http://iasl.iis.sinica.edu.tw/BioNER_intro04.htm</a></li>
                    <li><a href="https://goo.gl/9TrmnW">Wikipedia</a></li>
                    <li><span style="font-weight: bold"><a href="https://goo.gl/UuCj9N">BLIMP</a></span></li>
                    <li><span style="font-weight: bold"><a href="https://goo.gl/KRqi8A">BioMax</a></span></li>
                    <li> <span style="font-weight: bold"><a href="https://goo.gl/hW1K6E">BioLT</a></span></li>

                    <li style="list-style-type: circle ">中文文件分類</li>
                    <li style="list-style-type: circle"><span style=" color:darkblue;font-weight:bold">中文資訊擷取</span></li>
                    <li > 中文<span style=" color:darkblue;font-weight:bold">新聞</span></li>
                    <li style="list-style-type: circle">Related Texts Research Experts</li>

                </div>

            </ul>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3></h3>
            <p>0</p>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">

        </div>
        <div class="col-sm-3">




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
