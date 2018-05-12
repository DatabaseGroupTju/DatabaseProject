
<?php
session_start();
if(!isset($_SESSION['name'])){
header("Location:login.php");
exit();
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>毕业生就业信息管理系统</title>
	<!-- Bootstrap Styles-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FontAwesome Styles-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Morris Chart Styles-->
	<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<!-- Custom Styles-->
	<link href="assets/css/custom-styles.css" rel="stylesheet" />
	<!-- Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 

		
</head>

<body>
	 
	<div id="wrapper">
	<?php require 'nav.php'; ?>
	
		<div id="page-wrapper">
		    <div class="header"> 
				<h1 class="page-header">
					Dashboard <small>欢迎<?php echo $_SESSION['name'] ; ?></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">主页</a></li>
					<li>修改毕业生信息</li>
					<li class="active">插入</li>
				</ol> 
			</div>
		
			<div id="page-inner">
 			
				<form method="post">
				<input type="button" onclick="window.location.href='graduate.php'" value="插入读研学生信息">	
				<br><br>
				<input type="button" onclick="window.location.href='abroad.php'" value="插入出国学生信息">	
				<br><br>
				<input type="button" onclick="window.location.href='jiuye.php'" value="插入就业学生信息">	
				<br><br>
				<input type="button" onclick="window.location.href='other.php'" value="插入其他学生信息">	
				</form>
						
			</div>
			<!-- /. PAGE INNER  -->

		</div>
		<!-- /. PAGE WRAPPER  -->
		
		</div>
		<!-- /. WRAPPER  -->
		<!-- JS Scripts-->
		<!-- jQuery Js -->
		<script src="assets/js/jquery-1.10.2.js"></script>
		<!-- Bootstrap Js -->
		<script src="assets/js/bootstrap.min.js"></script>
	 
		<!-- Metis Menu Js -->
		<script src="assets/js/jquery.metisMenu.js"></script>
		<!-- Morris Chart Js -->
		<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
		<script src="assets/js/morris/morris.js"></script>
	
	
		<script src="assets/js/easypiechart.js"></script>
		<script src="assets/js/easypiechart-data.js"></script>
	
		<script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
		<!-- Custom Js -->
		<script src="assets/js/custom-scripts.js"></script>
		
		<script>
		</script>

	

</body>

</html>

