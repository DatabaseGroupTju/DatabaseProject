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
    
	$company_category = $_POST["company_category"];
	$company_industry = $_POST["company_industry"];
	$parent_company = $_POST["parent_company"];
	$location = $_POST["location"];
	$rank_500 = $_POST["rank_500"];
	
	
	$sql=<<<EOF
	DELETE FROM DW
	WHERE dwmc='$dwmc';
EOF;

	$sql.=<<<EOF
	DELETE FROM COMPANY
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
	INSERT INTO COMPANY (company_category, company_industry, parent_company, location, dwmc) 
	VALUES ('$company_category', '$company_industry', '$parent_company', '$location', '$dwmc');
EOF;

	$sql.=<<<EOF
	INSERT INTO COMPANY_RANK (year, rank_500, dwmc) 
	VALUES ('$year', '$rank_500', '$dwmc');
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
		// echo "插入成功！";
		echo "<script>alert('插入成功');history.go(-1);</script>";  
    }    
    mysqli_close($conn);
}
?>