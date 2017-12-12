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
session_set_cookie_params(5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>105021059_首頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/cotm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    include ("function_for_GoogleFont.php");
    googlefontset(true)
    ?>
    <style>
        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }

        .carousel-inner img {
            width: 100%; /* Set width to 100% */
            min-height: 200px;
        }

        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
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
                <img id="brand-image" alt="Website Logo" src="Tech/pic/csie.png"">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php
            include ("function.php");
            varbar($flag=1); ?>
            <ul class="nav navbar-nav navbar-right">
                <?php    if($_SESSION['id'] != null) {   ?>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in" ></span> Logout</a></li>
                <?php   }else{?>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php   } ?>
            </ul>
        </div>
<!--            </nav>-->
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="Tech/pic/top.jpg" style="height: 420px" alt="Image">
                        <div class="carousel-caption">
                            <h3>Asia</h3>
                            <p>university</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="Tech/pic/csie.png" style="height: 420px" alt="Image">
                        <div class="carousel-caption">
                            <span style="color:#ffcb20;"> <h3 >Asia</h3></span>
                            <span style="color:#000000;">  <p>csie</p></span>
                        </div>
                    </div>
                    <div class="item">
                        <img src="Tech/pic/forst.jpeg"  style="height: 420px" alt="Image">
                        <div class="carousel-caption">
                            <h3>wait</h3>
                            <p>push</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="well">

                <p style="text-align:center">  <img  alt="Website Logo" src="Tech/pic/jdwang.jpg" "></p>

            </div>
            <div class="well">
                <h1 >王經篤</h1>
                <p> 亞洲大學 資訊工程系 副教授</p>
            </div>
            <div class="well">
                <?php

                include("mysql_connect.inc.php");

                $connect = @mysqli_connect($db_server, $db_user, $db_password,$db_name);
                mysqli_set_charset($connect,'utf8');
                if($_SESSION['id'] != null)
                {
//                echo '<a href="register.php">新增</a>    ';
                    echo '<a href="update.php">修改</a>    <br>';
//                echo '<a href="delete.php">刪除</a>  <br>';
                }
                //將資料庫裡的所有會員資料顯示在畫面上
                $sql = "SELECT * FROM `profile`  ";

                $result = mysqli_query($connect,$sql);

                while($row = mysqli_fetch_row($result))
                {mysqli_set_charset($link,'utf8');
//                    id：$row[0]<br>
                    echo " email：$row[1]<br> " .
                        "nameC：$row[2]<br> nameE：$row[3]<br> degree：$row[4]<br> exp：$row[5] <br> position：$row[6]
             <br> officeroom：$row[7]<br> fax：$row[8] <br> phone：$row[9] <br> research：$row[10]<br>";
                }
                //            }
                ?>

            </div>
        </div>
    </div>
    <hr>
</div>

<div class="container text-center">
<!--    <h3>What We Do</h3>-->
    <br>
    <div class="row">
        <div class="col-sm-3">

<!--            <p>wait</p>-->
        </div>
        <div class="col-sm-3">
<!--            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--            <p>Project 2</p>-->
        </div>
        <div class="col-sm-3">
            <div class="well">
<!--                <p>Some text..</p>-->
            </div>
            <div class="well">
<!--                <p>Some text..</p>-->
            </div>
        </div>
        <div class="col-sm-3">
            <div class="well">
<!--                <p>Some text..</p>-->
            </div>
            <div class="well">
<!--                <p>Some text..</p>-->
            </div>
        </div>
    </div>
    <hr>
</div>

<!--<div class="container text-center">-->
<!--    <h3>Our Partners</h3>-->
<!--    <br>-->
<!--    <div class="row">-->
<!--        <div class="col-sm-2">-->
<!--            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--            <p>Partner 1</p>-->
<!--        </div>-->
<!--        <div class="col-sm-2">-->
<!--            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--            <p>Partner 2</p>-->
<!--        </div>-->
<!--        <div class="col-sm-2">-->
<!--            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--            <p>Partner 3</p>-->
<!--        </div>-->
<!--        <div class="col-sm-2">-->
<!--            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--            <p>Partner 4</p>-->
<!--        </div>-->
<!--        <div class="col-sm-2">-->
<!--            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--            <p>Partner 5</p>-->
<!--        </div>-->
<!--        <div class="col-sm-2">-->
<!--            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--            <p>Partner 6</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<br>

<footer class="container-fluid text-center">
    <p>Developing</p>
</footer>

</body>
</html>

