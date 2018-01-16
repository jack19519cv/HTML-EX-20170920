<?php
/**
 * Created by PhpStorm.
 * User: jackwang
 * Date: 2017/12/6
 * Time: 下午 08:39
 */

?>

<?php
function varbar($flag){
    $tmp=-5;
?>

<ul class="nav navbar-nav">

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
        form{margin:0px; display:inline}
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 12px;
        }

        .button1 {
            background-color: #3e4145;
            color: #d3d3d3;
            border: 2px solid #4CAF50;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }

        .button2 {
            background-color: #3e4145;
            color: #d3d7d4;
            border: 2px solid #008CBA;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
        }

        .button3 {
            background-color: #3e4145;
            color: #d3d7d4;
            border: 2px solid #ce1b3a;
        }

        .button3:hover {
            background-color: #f44336;
            color: white;
        }

        .button4 {
            background-color: white;
            color: black;
            border: 2px solid #e7e7e7;
        }

        .button4:hover {background-color: #e7e7e7;}

        .button5 {
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        .button5:hover {
            background-color: #555555;
            color: white;



        }
        .nav-tabs{
            background: rgb(210,223,237);
            background: -moz-linear-gradient(top, rgba(210,223,237,1) 0%, rgba(200,215,235,1) 18%, rgba(190,208,234,1) 27%, rgba(175,199,232,1) 47%, rgba(186,208,239,1) 73%, rgba(153,181,219,1) 100%, rgba(121,155,200,1) 100%, rgba(153,181,219,1) 101%);
            background: -webkit-linear-gradient(top, rgba(210,223,237,1) 0%,rgba(200,215,235,1) 18%,rgba(190,208,234,1) 27%,rgba(175,199,232,1) 47%,rgba(186,208,239,1) 73%,rgba(153,181,219,1) 100%,rgba(121,155,200,1) 100%,rgba(153,181,219,1) 101%);
            background: linear-gradient(to bottom, rgba(210,223,237,1) 0%,rgba(200,215,235,1) 18%,rgba(190,208,234,1) 27%,rgba(175,199,232,1) 47%,rgba(186,208,239,1) 73%,rgba(153,181,219,1) 100%,rgba(121,155,200,1) 100%,rgba(153,181,219,1) 101%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2dfed', endColorstr='#99b5db',GradientType=0 );
            border-radius: 10px;
        }
        .tab-content{
                /*background-color:#303136;*/
            color: #000000;
            padding:5px
        }

        .nav-tabs > li > a:active{
            border: medium none;
            border-radius: 10px;
        }

        .nav-tabs > li > a:hover{
            /*background-color: #303136 !important;*/
            background: rgb(10,8,9);
            background: -moz-linear-gradient(top, rgba(10,8,9,1) 0%, rgba(10,14,10,1) 79%, rgba(110,119,116,1) 96%, rgba(110,119,116,1) 96%, rgba(174,188,191,1) 100%, rgba(174,188,191,1) 100%);
            background: -webkit-linear-gradient(top, rgba(10,8,9,1) 0%,rgba(10,14,10,1) 79%,rgba(110,119,116,1) 96%,rgba(110,119,116,1) 96%,rgba(174,188,191,1) 100%,rgba(174,188,191,1) 100%);
            background: linear-gradient(to bottom, rgba(10,8,9,1) 0%,rgba(10,14,10,1) 79%,rgba(110,119,116,1) 96%,rgba(110,119,116,1) 96%,rgba(174,188,191,1) 100%,rgba(174,188,191,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0a0809', endColorstr='#aebcbf',GradientType=0 );
            border: medium none;
            border-radius: 0px;
            color:#fff;
        }

        .nav-tabs> li:focus,
        .nav>li:focus {
            background: rgb(10,8,9);
            background: -moz-linear-gradient(top, rgba(10,8,9,1) 0%, rgba(10,14,10,1) 79%, rgba(110,119,116,1) 96%, rgba(110,119,116,1) 96%, rgba(174,188,191,1) 100%, rgba(174,188,191,1) 100%);
            background: -webkit-linear-gradient(top, rgba(10,8,9,1) 0%,rgba(10,14,10,1) 79%,rgba(110,119,116,1) 96%,rgba(110,119,116,1) 96%,rgba(174,188,191,1) 100%,rgba(174,188,191,1) 100%);
            background: linear-gradient(to bottom, rgba(10,8,9,1) 0%,rgba(10,14,10,1) 79%,rgba(110,119,116,1) 96%,rgba(110,119,116,1) 96%,rgba(174,188,191,1) 100%,rgba(174,188,191,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0a0809', endColorstr='#aebcbf',GradientType=0 );
        }
        .nav>li:hover,
        .nav>li:focus,
        .navbar-nav>li:focus {
            background: rgb(10,8,9);
            background: -moz-linear-gradient(top, rgba(10,8,9,1) 0%, rgba(10,14,10,1) 79%, rgba(110,119,116,1) 96%, rgba(110,119,116,1) 96%, rgba(174,188,191,1) 100%, rgba(174,188,191,1) 100%);
            background: -webkit-linear-gradient(top, rgba(10,8,9,1) 0%,rgba(10,14,10,1) 79%,rgba(110,119,116,1) 96%,rgba(110,119,116,1) 96%,rgba(174,188,191,1) 100%,rgba(174,188,191,1) 100%);
            background: linear-gradient(to bottom, rgba(10,8,9,1) 0%,rgba(10,14,10,1) 79%,rgba(110,119,116,1) 96%,rgba(110,119,116,1) 96%,rgba(174,188,191,1) 100%,rgba(174,188,191,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0a0809', endColorstr='#aebcbf',GradientType=0 );
        }
    </style>
    <script language="JavaScript" type="text/javascript">

        function tfm_confirmLink(message) { //v1.0
            document.MM_returnValue = confirm(message);
        }
    </script>
<!--    --><?php //if($flag==1)echo"href='index.php'"?>
    <li <?php if($flag==1)echo "class='active'"?>><a <?php if($flag==1)echo"href='index.php'" ?><?php if($flag==2||3||4||5||6)echo "href='../index.php'"?>>
            <?php if($flag==1)echo"<img id='brand-image' alt='Website Logo' src='Tech/pic/home_yellow_69319.png'>"; else if ($flag==2||3||4||5||6) echo"<img id='brand-image' alt='Website Logo' src='pic/home_yellow_69319.png'>" ?> 首頁</a></li>
    <li <?php if($flag==2)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/Vitae.php'" ?><?php if($flag==2||3||4||5||6)echo "href='Vitae.php'"?>>
            <?php if($flag==1)echo'<img id="brand-image" alt="Website Logo" src="Tech/pic/cv_416920.png">'; else if ($flag==2||3||4||5||6) echo"<img id='brand-image' alt='Website Logo' src='pic/cv_416920.png'>" ?> 簡歷</a></li>
    <li <?php if($flag==3)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/Academic.php'" ?><?php if($flag==2||3||4||5||6)echo "href='Academic.php'"?>>
            <?php if($flag==1)echo'<img id="brand-image" alt="Website Logo" src="Tech/pic/if_books_254230.png">'; else if ($flag==2||3||4||5||6) echo"<img id='brand-image' alt='Website Logo' src='pic/if_books_254230.png'>" ?> 學術</a></li>
    <li <?php if($flag==4)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/writing.php'" ?><?php if($flag==2||3||4||5||6)echo "href='writing.php'"?>>
            <?php if($flag==1)echo'<img id="brand-image" alt="Website Logo" src="Tech/pic/Drawing_Pencil.png">'; else if ($flag==2||3||4||5||6) echo"<img id='brand-image' alt='Website Logo' src='pic/Drawing_Pencil.png'>" ?> 著作</a></li>
    <li <?php if($flag==5)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/student.php'" ?><?php if($flag==2||3||4||5||6)echo "href='student.php'"?>>
            <?php if($flag==1)echo'<img id="brand-image" alt="Website Logo" src="Tech/pic/if_Men_Symbol_Restroom_Human_Toilet_1396824.png">'; else if ($flag==2||3||4||5||6) echo"<img id='brand-image' alt='Website Logo' src='pic/if_Men_Symbol_Restroom_Human_Toilet_1396824.png'>" ?>學生</a></li>
    <li <?php if($flag==6)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/usualuse.php'" ?><?php if($flag==2||3||4||5||6)echo "href='usualuse.php'"?>>
            <?php if($flag==1)echo'<img id="brand-image" alt="Website Logo" src="Tech/pic/if_link_blue_68755.png">'; else if ($flag==2||3||4||5||6) echo"<img id='brand-image' alt='Website Logo' src='pic/if_link_blue_68755.png'>" ?> 常用連結</a></li>

</ul>
<?php
    }




