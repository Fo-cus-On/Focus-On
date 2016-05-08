<?php
$db_user = "essais";
$db_pass = "513wolizihao";
$db_host = "127.0.0.1";
$db_port = 3306;
$db_name = "focus";

$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name,$db_port);
mysqli_query($connect,"SET NAMES UTF8");

?>
