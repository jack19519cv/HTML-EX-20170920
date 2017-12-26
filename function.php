<?php
/**
 * Created by PhpStorm.
 * User: jackwang
 * Date: 2017/12/6
 * Time: 下午 08:39
 */



function varbar($flag){
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


    </style>

<!--    --><?php //if($flag==1)echo"href='index.php'"?>
    <li <?php if($flag==1)echo "class='active'"?>><a <?php if($flag==1)echo"href='index.php'" ?><?php if($flag==2||3||4||5||6)echo "href='../index.php'"?>>
            <?php if($flag==1)echo"<img id='brand-image' alt='Website Logo' src='Tech/pic/home_yellow_69319.png'>"; else if ($flag==2||3||4||5||6) echo"<img id='brand-image' alt='Website Logo' src='pic/home_yellow_69319.png'>" ?> 首頁</a></li>
    <li <?php if($flag==2)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/Vitae.php'" ?><?php if($flag==2||3||4||5||6)echo "href='Vitae.php'"?>>
            <?php if($flag==1)echo'<img id="brand-image" alt="Website Logo" src="Tech/pic/cv_416920.png">'; else if ($flag==2||3||4||5||6) echo"<img id='brand-image' alt='Website Logo' src='pic/cv_416920.png'>" ?> 簡歷</a></li>
    <li <?php if($flag==3)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/Academic.php'" ?><?php if($flag==2||3||4||5||6)echo "href='Academic.php'"?>>
            <?php if($flag==1)echo'<img id="brand-image" alt="Website Logo" src="Tech/pic/handdrawn-flask_335394.png">'; else if ($flag==2||3||4||5||6) echo"<img id='brand-image' alt='Website Logo' src='pic/handdrawn-flask_335394.png'>" ?> 學術</a></li>
    <li <?php if($flag==4)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/writing.php'" ?><?php if($flag==2||3||4||5||6)echo "href='writing.php'"?>>
            <?php if($flag==1)echo'<img id="brand-image" alt="Website Logo" src="Tech/pic/edit_1167983.png">'; else if ($flag==2||3||4||5||6) echo"<img id='brand-image' alt='Website Logo' src='pic/edit_1167983.png'>" ?> 著作</a></li>
    <li <?php if($flag==5)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/student.php'" ?><?php if($flag==2||3||4||5||6)echo "href='student.php'"?>>學生</a></li>
    <li <?php if($flag==6)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/usualuse.php'" ?><?php if($flag==2||3||4||5||6)echo "href='usualuse.php'"?>>常用連結</a></li>

</ul>
<?php
    }




