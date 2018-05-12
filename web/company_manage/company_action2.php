<?php
header("Content-Type:text/html;charset=utf-8");
include "../conn.php";
$dwmc=$_GET['dwmc'];
$parent_company=$_GET['parent_company'];
$location=$_GET['location'];
$company_category=$_GET['company_category'];
$company_industry=$_GET['company_industry'];
//post获取到的company信息 更新到数据库中
$sql="update COMPANY SET location='".$location."',parent_company='".$parent_company."',company_category='".$company_category."',company_industry='".$company_industry."' where dwmc ='".$dwmc."'";
$result=$conn->query($sql);
if($result)
echo "success! $dwmc";
else
echo "wrong!";
?>