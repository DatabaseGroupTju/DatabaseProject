<?php include '../conn.php';
$uid=$_POST['uid'];
// 查找uid相关信息
$sql = "select * from USER where uid ='".$uid."'";  
$result=$conn->query($sql);
$infos = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($infos,$row);
} 
//将信息转换为json返回前端
echo json_encode($infos);
?>