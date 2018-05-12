<?php 
header("Content-Type:text/html;charset=utf-8");
require_once('../conn.php'); 
$dwmc=$_GET["dwmc"];
//删除post获取到的指定dwmc的单位信息
$sql = "delete from COMPANY where dwmc = '$dwmc'"; 
$result = mysqli_query($conn, $sql); 
if($result){
	echo json_encode(array(
		"status"=>true,
		"dwmc"=>$dwmc
	),JSON_UNESCAPED_UNICODE);
}else{
	echo json_encode(array(
		"status"=>false,
		"dwmc"=>$dwmc
    ),JSON_UNESCAPED_UNICODE);}
?>