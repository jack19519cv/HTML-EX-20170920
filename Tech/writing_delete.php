<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if($_SESSION['id'] != null)
{
    echo "<form name=\"form\" method=\"post\" action=\"writing_delete_finish.php\">";
    echo "要刪除的題目：<input type=\"text\" name=\"tag\" /> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
    echo "</form>";
}
else

?>