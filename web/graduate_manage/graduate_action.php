<?php include '../conn.php';
$xh=$_POST['xh'];
//获取post学号学生的相关信息
$sql = "select * from STUDENT where xh ='".$xh."'";  
$result=$conn->query($sql);
$infos = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($infos,$row);

} 
//将结果转换为json
echo json_encode($infos);
?>