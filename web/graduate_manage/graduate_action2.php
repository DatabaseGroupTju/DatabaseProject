<?php
include "../conn.php";
$year=$_POST['year'];
$xh=$_POST['xh'];
$xm=$_POST['xm'];
$xb=$_POST['xb'];
$mz=$_POST['mz'];
$cc=$_POST['cc'];
$zy=$_POST['zy'];
$pyfs=$_POST['pyfs'];
$syszd=$_POST['syszd'];
$knslb=$_POST['knslb'];
$fy=$_POST['fy'];
$qq=$_POST['qq'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$byqx=$_POST['byqx'];
$dwmc=$_POST['dwmc'];
$sfzh=$_POST['sfzh'];
// 获取post传递过来的学生信息修改数据库相关表项
$sql="update STUDENT SET year='".$year."',xh='".$xh."',xm='".$xm."',xb='".$xb."',mz='".$mz."',cc='".$cc."',zy='".$zy."',pyfs='".$pyfs."',syszd='".$syszd."',knslb='".$knslb."',fy='".$fy."',qq='".$qq."',email='".$email."',mobile='".$mobile."',byqx='".$byqx."',dwmc='".$dwmc."' where sfzh ='".$sfzh."'";
$result=$conn->query($sql);
if($result)
echo "success! $year";
else
echo "wrong!";
?>