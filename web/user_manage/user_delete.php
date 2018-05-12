<?php
// 删除记录
$conn=@mysql_connect("localhost","root","be4nfanqrilq"); //数据库
@mysql_select_db("InfoSystem"); //数据表
$uid=$_POST['uid'];
//从数据库删除获取到的uid record
$sql = "DELETE FROM `USER` WHERE uid = '".$uid."'";
$res = mysql_query($sql,$conn);
if($res){
	echo json_encode(array(
		"status"=>true,
		"uid"=>$uid
	),JSON_UNESCAPED_UNICODE);
}else{
	echo json_encode(array(
		//如果删除失败，可能不存在就返回错误
		"status"=>false,
		"uid"=>$uid
	),JSON_UNESCAPED_UNICODE);
}
// JSON_UNESCAPED_UNICODE不会结果转码为/u***