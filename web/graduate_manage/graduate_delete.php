<?php
// 删除记录
$conn=@mysql_connect("localhost","root","be4nfanqrilq"); //数据库
@mysql_select_db("InfoSystem"); //数据表
$xh=$_GET['xh'];
//输出post传入的xh信息
$sql = "DELETE FROM `STUDENT` WHERE xh = '".$xh."'";
$res = mysql_query($sql,$conn);
if($res){
	echo json_encode(array(
		"status"=>true,
		// "data"=>"this is data~",
		"xh"=>$xh
	),JSON_UNESCAPED_UNICODE);
}else{
	echo json_encode(array(
		"status"=>false,
		// "data"=>"this is data~",
		"xh"=>$xh
	),JSON_UNESCAPED_UNICODE);
}