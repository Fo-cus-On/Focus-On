<?php
require_once('./conn.php');

$sql = "select * from `user` where username = '$_POST[username]'";
$query = mysqli_query($connect,$sql);
$list = mysqli_fetch_array($query);
if($_POST['userid'] == $list['userid'] && $_POST['motto'] == $list['motto'] && $_POST['label'] == $list['label'])
{
	$result = array("status" => "same");
	echo json_encode($result);
}
else{
	$sql2 = "update `user` set userid = '$_POST[userid]',motto = '$_POST[motto]',label = '$_POST[label]' where username = '$_POST[username]'";
	$query = mysqli_query($connect,$sql2);
	$result = array("status" => "success");
	echo json_encode($result);
}

?>
