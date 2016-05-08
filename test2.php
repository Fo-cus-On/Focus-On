<?php
require_once('./conn.php');

$sql = "select * from `politics` order by id desc";
$query = mysqli_query($connect,$sql);
for($i=1;$i<7;$i++)
{
	$list = mysqli_fetch_array($query);
	$result[$i] = array("newstitle$i" => $list['title'],"newsurl$i" => $list['url']);

	foreach($result[$i] as $key => $value){
	$result[$i][$key] = urlencode($value);
	}
	echo $result[$i] = urldecode(json_encode($result[$i]));
	}
?>
