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

            background: lightblue url("") no-repeat fixed center;
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
            varbar($flag=5); ?>
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
<!--                    <li class="active" ><a href="student.php">Student</a></li>-->
<!---->
<!--                </ul>-->
            </div>



        </div>
    </div>
</div>
<!--<div class="text-left">-->
<hr >
            <div class="container">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align:center; color:#0000b1;">學年度 &emsp;&emsp;</th>
                        <th style="text-align:center; color:#0000b1;">系所</th>
                        <th style="text-align:center; color:#0000b1; ">姓名</th>
                        <th style="text-align:center; color:#0000b1;">論文題目</th>
                        <th style="text-align:center; color:#0000b1;">備註</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align:center;">102</td>
                        <td>資訊工程所 (博士班)</td>
                        <td>Heri Wijayanto</td>
                        <td></td>
                        <td>(Indonesia)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">101</td>
                        <td>資訊工程所</td>
                        <td>陳彥棠</td>
                        <td>提升 Hadoop MapReduce 計算效能之研究-以抽取樣式歷史為例
                            (Promoting the Computational Performance of Hadoop MapReduce for Pattern History Extraction)</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">101</td>
                        <td>資訊工程所</td>
                        <td>蔣中凱</td>
                        <td>樣式歷史資料之形狀查詢-藉由Haar小波
                            (Shape Query for Pattern History via Haar Wavelet)</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td style="text-align:center;">101</td>
                        <td>資訊工程所</td>
                        <td>郭佳霖</td>
                        <td>社群網站使用者上線時段分析-以批踢踢為例</td>
                        <td>(2014.6畢業)(102學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">99</td>
                        <td>資訊工程所</td>
                        <td>吳健瑋</td>
                        <td>利用 Hadoop 建立樣式歷史資料趨勢索引</td>
                        <td>(2014.6畢業)(102學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">99</td>
                        <td>資訊工程所</td>
                        <td>許柏凱</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">97</td>
                        <td>資訊工程所</td>
                        <td>施耀竣</td>
                        <td>分類架構模糊度研究-利用鄰近點亂度</td>
                        <td>(2010.6畢業)(98學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">97</td>
                        <td>生物資訊所</td>
                        <td>黃進福</td>
                        <td>病毒分類研究-藉由基因體序列</td>
                        <td>(2011.6畢業)(99學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">97</td>
                        <td>資訊工程所</td>
                        <td>Arie Budiansyah</td>
                        <td>Text Trend Analysis from Indonesia Newspaper</td>
                        <td>(2010.6畢業)(98學年度)(Indonesia)</td>
                    </tr>

                    <tr>
                        <td style="text-align:center;">96</td>
                        <td>電腦與通訊所</td>
                        <td>廖益緯</td>
                        <td>關鍵字之趨勢研究-藉由PubMed文獻</td>
                        <td>(2010.6畢業)(98學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">96</td>
                        <td>資訊工程所</td>
                        <td>劉宣榮</td>
                        <td>中華民國專利趨勢查詢-藉由顯要事件歷史</td>
                        <td>(2010.6畢業)(98學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">95</td>
                        <td>資訊工程所</td>
                        <td>盧勇凱</td>
                        <td>病毒分類研究-藉由CDS序列</td>
                        <td>(2011.6畢業)(99學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">95</td>
                        <td>生物資訊所</td>
                        <td>許瀚升</td>
                        <td>水稻T-DNA插入突變體右翼序列自動化比對系統之建立</td>
                        <td>(2008.6畢業)(96學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">95</td>
                        <td>生物資訊所</td>
                        <td>魏子傑</td>
                        <td>癌症類別關連研究-藉由生物晶片分析</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">94</td>
                        <td>生物資訊所</td>
                        <td>沈晉億</td>
                        <td>古菌與甲烷代謝有關之獨特胺基酸序列的挖掘--藉由基因體比較</td>
                        <td>(2008.1畢業)(96學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">93</td>
                        <td>生物資訊所</td>
                        <td>張文福</td>
                        <td>古菌基因體相關於氧氣需求的研究</td>
                        <td>(2007.6畢業)(95學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">93</td>
                        <td>生物資訊所</td>
                        <td>鄒佳芳</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">92</td>
                        <td>資訊工程所</td>
                        <td>曾冠燕</td>
                        <td>生物資訊文獻查詢-利用文件相似度</td>
                        <td>(2008.1畢業)(96學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">92</td>
                        <td>資訊工程所</td>
                        <td>楊季剛</td>
                        <td>中文新聞相關性事件之挖掘-藉由Haar小波轉換</td>
                        <td>(2007.1畢業)(95學年度)</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">92</td>
                        <td>生物資訊所</td>
                        <td>林炯璁</td>
                        <td>臨床微生物檢驗的資料挖掘研究－以偵測鮑氏不動桿菌之院內感染為例</td>
                        <td>(2006.6畢業)(94學年度)</td>
                    </tr>

                    </tbody>
                </table>
            </div>






    <br>




<br>

<br><br>

<footer class="container-fluid text-center">
    <p>@developing by jun</p>
</footer>


</body>
</html>


