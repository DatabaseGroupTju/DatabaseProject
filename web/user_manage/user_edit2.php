<?php
include "../conn.php";
$password=$_POST['password'];
$username=$_POST['username'];
$uid=$_POST['uid'];
//修改相关uid信息
$sql="update USER SET password='".$password."',username='".$username."' where uid ='".$uid."'";
$result=$conn->query($sql);
if($result)
echo "success! $uid";
else
echo "wrong!";
?>