<?php
require_once('./conn.php');



$sql = "select * from `politics` order by id desc";
$query = mysqli_query($connect,$sql);

for($i=0;$i<6;$i++)
{
	$list = mysqli_fetch_array($query);
	$arr[][$i] = array("newstitle[$i]" => $list['title'],"newsurl[$i]" => $list['url']);
}

$news1 = $arr[2];
$result = array("news1title" => $arr[5]['title'],"news1url" => $arr[5]['url']);
print_r($news1);

?>
