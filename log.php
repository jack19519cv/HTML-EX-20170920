<?php
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include("mysql_connect.inc.php");

//$id = $_SESSION['id'];
$ip = get_client_ip();
$date = date("Y-m-d H:i:s");
//  $connect = @mysqli_connect($db_server, $db_user, $db_password,$db_name);
mysqli_set_charset($connect,'utf8');

//將資料庫裡的所有資料顯示在畫面上

//$sql = "SELECT * FROM `writingData`";
include ("get_log_size.php");


$tag = $num_rows+1;

$sql = "INSERT INTO log (tag, id, ip, date) VALUES ('$tag','$id','$ip' ,'$date')";
if (mysqli_query($connect,$sql)) {

    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
} else {
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}



function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

?>

