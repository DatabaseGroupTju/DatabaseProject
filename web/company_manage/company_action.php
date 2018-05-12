<?php 
include '../conn.php';
header("Content-Type:text/html;charset=utf-8");
$dwmc=$_GET['dwmc'];
//从数据库获取指定dwmc的信息
$sql = "select * from COMPANY where dwmc ='".$dwmc."'";  
$result=$conn->query($sql);
$infos = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($infos,$row);

} 
// 将返回信息转换为json
echo json_encode($infos,JSON_UNESCAPED_UNICODE);
?>