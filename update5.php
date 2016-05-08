<?php
require_once('./conn.php');

$sql = "select * from `$_POST[database]` order by id desc limit 4,1";
$query = mysqli_query($connect,$sql);
$list = mysqli_fetch_array($query);
$result0 = array("newstitle" => $list['title'],"newsurl" => $list['url']);

foreach($result0 as $key => $value){
	$result0[$key] = urlencode($value);
	}
	echo $result = urldecode(json_encode($result0));

?>
