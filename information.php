<?php
require_once('./conn.php');

$sql = "select * from `user` where username = '$_POST[username]'";
$query = mysqli_query($connect,$sql);
$list = mysqli_fetch_array($query);

$result = array("userid" => $list['userid'],"motto" => $list['motto'],"label" => $list['label']);
echo json_encode($result);
?>
