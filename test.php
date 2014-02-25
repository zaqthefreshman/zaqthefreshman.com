<?php $postdata = file_get_contents("php://input");
file_put_contents("/tmp/postData.log", "[".date("Y-m-d H:i:s")."]".$postdata."\r\n", FILE_APPEND);
echo $postdata;
?>
