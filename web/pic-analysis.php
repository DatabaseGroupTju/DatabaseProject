
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
	<title>cssmoban</title>
	<!-- Bootstrap Styles-->
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FontAwesome Styles-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- Custom Styles-->
	<link href="assets/css/custom-styles.css" rel="stylesheet" />
	<!-- Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<!--<link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> -->
	<script src="assets/js/echarts.min.js"></script>
</head>

<body>
	<div id="wrapper">
	<?php require 'nav.php'; ?>
	<div id="page-wrapper">
	<div class="header">
	<h1 class="page-header">
	信息栏 <small>欢迎 <?php echo $_SESSION['name'] ; ?></small>
	</h1>
	<ol class="breadcrumb">
	<li><a href="index.php">主页</a></li>
	<li class="active">图标分析</li>
	</ol>
	</div>
		<div id="page-inner">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						就业单位性质
						</div>
						<div class="panel-body" id="picBody_1" >
							<div id="pic_1" style="width: 500px;height:400px;"></div>
    					</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						Area Chart
						</div>
						<div class="panel-body" id="picBody_2" >
							<div id="pic_2" style="width: 500px;height:400px;"></div>
    					</div>
					</div>
				</div>
			</div>
			<!-- /. ROW  -->
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
						就业单位性质
						</div>
						<div class="panel-body">
							<div id="1111"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							就业去向
						</div>
						<div class="panel-body">
							<div id="22"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- /. ROW  -->

		</div>
		<!-- /. PAGE INNER  -->

	</div>

	<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->
	<!-- JS Scripts -->
	<!-- jQuery Js -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!-- Bootstrap Js -->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Metis Menu Js -->
	<script src="assets/js/jquery.metisMenu.js"></script>

	<!-- Custom Js -->
	<script src="assets/js/custom-scripts.js"></script>
	<script src="assets/js/custom.js"></script>


</body>

</html>
