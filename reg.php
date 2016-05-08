<?php
require_once('./conn.php');

if($_POST['username'] !="" && $_POST['password'] !="")
{
	$password = md5($_POST['password']);
	
	$sql = "select * from `user` where username='$_POST[username]'";
	$query = mysqli_query($connect,$sql);
	$row = mysqli_num_rows($query);
	if($row == 0){
		$sql2 = "insert into `user` (username,password) values('$_POST[username]','$password')";
		$query = mysqli_query($connect,$sql2);
		$result = array("status" => "success");
		echo json_encode($result);
		}
	else{
		$result =array("status" => "exists");
		echo json_encode($result);
	}
}
?>
