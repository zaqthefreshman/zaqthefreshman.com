<?php $postdata = file_get_contents("php://input");
$headers = print_r(getallheaders(), true);
if($postdata)
{
	file_put_contents("/tmp/postData.log", "[".date("Y-m-d H:i:s")."][".$postdata."][".$headers."]\r\n", FILE_APPEND);
	echo $postdata;
}
else
{
	file_put_contents("/tmp/postData.log", "[".date("Y-m-d H:i:s")."][".print_r($_GET, true)."]".$headers."]\r\n", FILE_APPEND);
	echo print_r($_GET, true);
}
?>
