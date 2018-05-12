<?php
// 增加记录
$conn=@mysql_connect("localhost","root","be4nfanqrilq"); //数据库
@mysql_select_db("InfoSystem"); //数据表

$name=$_POST['name'];
$pwd=$_POST['pwd'];
//添加管理员用户，uid是自增加 的
$sql="INSERT INTO USER (`username`, `password`) VALUES ('".$name."','".$pwd."')";
$res=mysql_query($sql,$conn);

if($res&&$res!=null){
	echo json_encode(array(
		"status"=>true,
		"info"=>"add success"
		),JSON_UNESCAPED_UNICODE);
}else{
	echo json_encode(array(
		//因为username是主码，所以如果注册失败可能是因为账户已存在
		"status"=>false,
		"info"=>"add error",
		"sql"=>$sql
		),JSON_UNESCAPED_UNICODE);
}