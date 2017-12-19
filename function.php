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


<!--    --><?php //if($flag==1)echo"href='index.php'"?>
    <li <?php if($flag==1)echo "class='active'"?>><a <?php if($flag==1)echo"href='index.php'" ?><?php if($flag==2||3||4||5||6)echo "href='../index.php'"?>>首頁</a></li>
    <li <?php if($flag==2)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/Vitae.php'" ?><?php if($flag==2||3||4||5||6)echo "href='Vitae.php'"?>>簡歷</a></li>
    <li <?php if($flag==3)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/Academic.php'" ?><?php if($flag==2||3||4||5||6)echo "href='Academic.php'"?>>學術</a></li>
    <li <?php if($flag==4)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/writing.php'" ?><?php if($flag==2||3||4||5||6)echo "href='writing.php'"?>>著作</a></li>
    <li <?php if($flag==5)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/student.php'" ?><?php if($flag==2||3||4||5||6)echo "href='student.php'"?>>學生</a></li>
    <li <?php if($flag==6)echo "class='active'"?>><a <?php if($flag==1)echo"href='Tech/usualuse.php'" ?><?php if($flag==2||3||4||5||6)echo "href='usualuse.php'"?>>常用連結</a></li>

</ul>
<?php
    }




