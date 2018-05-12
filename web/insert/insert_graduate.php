<?php
header("Content-Type:text/html;charset=utf-8");
require_once('../conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $year = $_POST["year"];
    $sex = $_POST["xb"];
    $name = $_POST["xm"];
	$mz = $_POST["mz"];
	$cc = $_POST["cc"];
	$zy = $_POST["zy"];
	$pyfx = $_POST["pyfx"];
	$syszd = $_POST["cmbProvince"].=$_POST["cmbCity"].=$_POST["cmbArea"];
	$knslb = $_POST["knslb"];
	$xy = $_POST["xy"];
	$xh = $_POST["xh"];
	$qq = $_POST["qq"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	
	$byqx = $_POST["byqx"];
	
	$dwmc = $_POST["dwmc"];
    $sfzh = $_POST["sfzh"];
    
	$institution_category = $_POST["institution_category"];
	$location = $_POST["location"];
	
	$sql=<<<EOF
	DELETE FROM DW
	WHERE dwmc='$dwmc';
EOF;

	$sql.=<<<EOF
	DELETE FROM NATIONAL_UNIVERSITY
	WHERE dwmc='$dwmc';
EOF;
	
	$sql.=<<<EOF
	INSERT INTO DW (dwmc)
	VALUES ('$dwmc');
EOF;
	
	$sql.=<<<EOF
	INSERT INTO STUDENT(year,xb,xm,mz,cc,zy,pyfs,syszd,knslb,fy,xh,qq,email,mobile,byqx,dwmc,sfzh) 
	VALUES ('$year','$sex','$name','$mz','$cc','$zy','$pyfx','$syszd','$knslb','$xy','$xh','$qq','$email','$mobile','$byqx','$dwmc','$sfzh');
EOF;
	
	$sql.=<<<EOF
	INSERT INTO NATIONAL_UNIVERSITY (institution_category, location, dwmc)
	VALUES ('$institution_category', '$location', '$dwmc');
EOF;
	
$sql1 = "select * from STUDENT where sfzh ='".$sfzh."' OR xh ='".$xh."'";    
$result=$conn->query($sql1);
echo $result->num_rows;
if($result->num_rows!=0){
	echo "<script>alert('毕业生信息已经存在');history.go(-1);</script>";  
	return;
}
    if($conn->multi_query($sql) === FALSE){
        die('Error: '. mysqli_error($conn));
    }
    else{
        ob_clean();
        ob_end_flush();
		echo "<script>alert('插入成功');history.go(-1);</script>";  
    }    
    mysqli_close($conn);
}
?>