<?php
/**
 * Created by PhpStorm.
 * User: jun_wang
 * Date: 2018/1/13
 * Time: 下午 07:04
 */?>


<?php
function varbar($flag){
    ?>

    <li <?php if($flag==1)echo "class='active'"?>><a data-toggle="tab" href="#home">Journal</a></li>
    <li <?php if($flag==2)echo "class='active'"?> ><a data-toggle="tab" href="#menu1">International Conference</a></li>
    <li <?php if($flag==3)echo "class='active'"?> ><a data-toggle="tab" href="#menu2">Domestic Conference</a></li>
<?php




}
?>
