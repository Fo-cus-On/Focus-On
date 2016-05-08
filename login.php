<?php
require_once('./conn.php');

if($_POST['username'] !="" &&$_POST['password'] != ""){
	$sql = "select * from `user` where username = '$_POST[username]'";
	$query = mysqli_query($connect,$sql);
	$list = mysqli_fetch_array($query);
	if($_POST['username'] == $list['username'] && md5($_POST['password']) == $list['password'])
	{
		$result = array("status" => "success");
		echo json_encode($result);
	}
	else
	{
		$result = array("status" => "error");
		echo json_encode($result);
	}
}
else
{
	$result = array("status" => "error");
	echo json_encode($result);
}
?>
