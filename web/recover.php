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

	<!-- FontAwesome Styles-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- jQury Js -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/jquery.metisMenu.js"></script>
	<!-- BootStrap Js -->
	<script src="//cdn.bootcss.com/datatables/1.10.13/js/dataTables.bootstrap.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- BootStrap Css -->
	<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom Styles-->
	<link href="assets/css/custom-styles.css" rel="stylesheet" />
	<!-- Custom Js -->
	<script src="assets/js/custom-scripts.js"></script>
</head>

<body>
	<div id="wrapper">
		<?php require 'nav.php'; ?>
		<div id="page-wrapper">
			<div class="header">
				<h1 class="page-header">
					欢迎
					<small>
						<?php echo $_SESSION['name'] ; ?>
					</small>
				</h1>
				<ol class="breadcrumb">
					<li>
						<a href="index.php">主页</a>
					</li>
					<li class="active">恢复</li>
				</ol>

			</div>
			<div id="page-inner">
				<div id="morris-line-chart"></div>
				<div id="morris-bar-chart"></div>
				<div id="morris-area-chart"></div>
			</div>
			<!-- /. PAGE INNER  -->

		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->

</body>

</html>