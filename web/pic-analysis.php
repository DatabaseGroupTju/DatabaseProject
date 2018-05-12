
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
	欢迎 <?php echo $_SESSION['name'] ; ?></small>
	</h1>
	<ol class="breadcrumb">
	<li><a href="index.php">主页</a></li>
	<li class="active">图表分析</li>
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
						升学单位性质
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
						毕业去向
						</div>
						<div class="panel-body" id="picBody_3" >
							<div id="pic_3" style="width: 500px;height:400px;"></div>
    					</div>
					</div>
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							就业行业分布
						</div>
						<div class="panel-body" id="picBody_4" >
							<div id="pic_4" style="width: 500px;height:400px;"></div>
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

	<?php
	include("./dataView/data_view1.php");
	include("./dataView/data_view2.php");
	include("./dataView/data_view3.php");
	include("./dataView/data_view4.php");
	?>

	<script type="text/javascript">
		var view1data01=<?php echo $view1data01; ?>;
		var view1data02=<?php echo $view1data02; ?>;
		var view1data03=<?php echo $view1data03; ?>;
		var view1data04=<?php echo $view1data04; ?>;
		var view1data05=<?php echo $view1data05; ?>;

		var view1data11=<?php echo $view1data11; ?>;
		var view1data12=<?php echo $view1data12; ?>;
		var view1data13=<?php echo $view1data13; ?>;
		var view1data14=<?php echo $view1data14; ?>;
		var view1data15=<?php echo $view1data15; ?>;

		var view1data21=<?php echo $view1data21; ?>;
		var view1data22=<?php echo $view1data22; ?>;
		var view1data23=<?php echo $view1data23; ?>;
		var view1data24=<?php echo $view1data24; ?>;
		var view1data25=<?php echo $view1data25; ?>;

		var view1data31=<?php echo $view1data31; ?>;
		var view1data32=<?php echo $view1data32; ?>;
		var view1data33=<?php echo $view1data33; ?>;
		var view1data34=<?php echo $view1data34; ?>;
		var view1data35=<?php echo $view1data35; ?>;

		var view2data01=<?php echo $view2data01; ?>;
		var view2data02=<?php echo $view2data02; ?>;
		var view2data03=<?php echo $view2data03; ?>;
		var view2data04=<?php echo $view2data04; ?>;
		var view2data05=<?php echo $view2data05; ?>;
		var view2data06=<?php echo $view2data06; ?>;
		var view2data07=<?php echo $view2data07; ?>;
		var view2data08=<?php echo $view2data08; ?>;
		var view2data09=<?php echo $view2data09; ?>;
		var view2data0A=<?php echo $view2data0A; ?>;
		var view2data0B=<?php echo $view2data0B; ?>;
		var view2data0C=<?php echo $view2data0C; ?>;

		var view2data11=<?php echo $view2data11; ?>;
		var view2data12=<?php echo $view2data12; ?>;
		var view2data13=<?php echo $view2data13; ?>;
		var view2data14=<?php echo $view2data14; ?>;
		var view2data15=<?php echo $view2data15; ?>;
		var view2data16=<?php echo $view2data16; ?>;
		var view2data17=<?php echo $view2data17; ?>;
		var view2data18=<?php echo $view2data18; ?>;
		var view2data19=<?php echo $view2data19; ?>;
		var view2data1A=<?php echo $view2data1A; ?>;
		var view2data1B=<?php echo $view2data1B; ?>;
		var view2data1C=<?php echo $view2data1C; ?>;

		var view2data21=<?php echo $view2data21; ?>;
		var view2data22=<?php echo $view2data22; ?>;
		var view2data23=<?php echo $view2data23; ?>;
		var view2data24=<?php echo $view2data24; ?>;
		var view2data25=<?php echo $view2data25; ?>;
		var view2data26=<?php echo $view2data26; ?>;
		var view2data27=<?php echo $view2data27; ?>;
		var view2data28=<?php echo $view2data28; ?>;
		var view2data29=<?php echo $view2data29; ?>;
		var view2data2A=<?php echo $view2data2A; ?>;
		var view2data2B=<?php echo $view2data2B; ?>;
		var view2data2C=<?php echo $view2data2C; ?>;

		var view2data31=<?php echo $view2data31; ?>;
		var view2data32=<?php echo $view2data32; ?>;
		var view2data33=<?php echo $view2data33; ?>;
		var view2data34=<?php echo $view2data34; ?>;
		var view2data35=<?php echo $view2data35; ?>;
		var view2data36=<?php echo $view2data36; ?>;
		var view2data37=<?php echo $view2data37; ?>;
		var view2data38=<?php echo $view2data38; ?>;
		var view2data39=<?php echo $view2data39; ?>;
		var view2data3A=<?php echo $view2data3A; ?>;
		var view2data3B=<?php echo $view2data3B; ?>;
		var view2data3C=<?php echo $view2data3C; ?>;

		var view3data01=<?php echo $view3data01; ?>;
		var view3data02=<?php echo $view3data02; ?>;
		var view3data03=<?php echo $view3data03; ?>;
		var view3data04=<?php echo $view3data04; ?>;
		var view3data05=<?php echo $view3data05; ?>;
		var view3data06=<?php echo $view3data06; ?>;
		var view3data07=<?php echo $view3data07; ?>;
		var view3data08=<?php echo $view3data08; ?>;
		var view3data09=<?php echo $view3data09; ?>;
		var view3data0A=<?php echo $view3data0A; ?>;
		var view3data0B=<?php echo $view3data0B; ?>;
		var view3data0C=<?php echo $view3data0C; ?>;
		var view3data0D=<?php echo $view3data0D; ?>;
		var view3data0E=<?php echo $view3data0E; ?>;
		var view3data0F=<?php echo $view3data0F; ?>;
		var view3data0G=<?php echo $view3data0G; ?>;
		var view3data0H=<?php echo $view3data0H; ?>;

		var view3data11=<?php echo $view3data11; ?>;
		var view3data12=<?php echo $view3data12; ?>;
		var view3data13=<?php echo $view3data13; ?>;
		var view3data14=<?php echo $view3data14; ?>;
		var view3data15=<?php echo $view3data15; ?>;
		var view3data16=<?php echo $view3data16; ?>;
		var view3data17=<?php echo $view3data17; ?>;
		var view3data18=<?php echo $view3data18; ?>;
		var view3data19=<?php echo $view3data19; ?>;
		var view3data1A=<?php echo $view3data1A; ?>;
		var view3data1B=<?php echo $view3data1B; ?>;
		var view3data1C=<?php echo $view3data1C; ?>;
		var view3data1D=<?php echo $view3data1D; ?>;
		var view3data1E=<?php echo $view3data1E; ?>;
		var view3data1F=<?php echo $view3data1F; ?>;
		var view3data1G=<?php echo $view3data1G; ?>;
		var view3data1H=<?php echo $view3data1H; ?>;

		var view3data21=<?php echo $view3data21; ?>;
		var view3data22=<?php echo $view3data22; ?>;
		var view3data23=<?php echo $view3data23; ?>;
		var view3data24=<?php echo $view3data24; ?>;
		var view3data25=<?php echo $view3data25; ?>;
		var view3data26=<?php echo $view3data26; ?>;
		var view3data27=<?php echo $view3data27; ?>;
		var view3data28=<?php echo $view3data28; ?>;
		var view3data29=<?php echo $view3data29; ?>;
		var view3data2A=<?php echo $view3data2A; ?>;
		var view3data2B=<?php echo $view3data2B; ?>;
		var view3data2C=<?php echo $view3data2C; ?>;
		var view3data2D=<?php echo $view3data2D; ?>;
		var view3data2E=<?php echo $view3data2E; ?>;
		var view3data2F=<?php echo $view3data2F; ?>;
		var view3data2G=<?php echo $view3data2G; ?>;
		var view3data2H=<?php echo $view3data2H; ?>;

		var view3data31=<?php echo $view3data31; ?>;
		var view3data32=<?php echo $view3data32; ?>;
		var view3data33=<?php echo $view3data33; ?>;
		var view3data34=<?php echo $view3data34; ?>;
		var view3data35=<?php echo $view3data35; ?>;
		var view3data36=<?php echo $view3data36; ?>;
		var view3data37=<?php echo $view3data37; ?>;
		var view3data38=<?php echo $view3data38; ?>;
		var view3data39=<?php echo $view3data39; ?>;
		var view3data3A=<?php echo $view3data3A; ?>;
		var view3data3B=<?php echo $view3data3B; ?>;
		var view3data3C=<?php echo $view3data3C; ?>;
		var view3data3D=<?php echo $view3data3D; ?>;
		var view3data3E=<?php echo $view3data3E; ?>;
		var view3data3F=<?php echo $view3data3F; ?>;
		var view3data3G=<?php echo $view3data3G; ?>;
		var view3data3H=<?php echo $view3data3H; ?>;

		var view4data01=<?php echo $view4data01; ?>;
		var view4data02=<?php echo $view4data02; ?>;
		var view4data03=<?php echo $view4data03; ?>;
		var view4data04=<?php echo $view4data04; ?>;

		var view4data11=<?php echo $view4data11; ?>;
		var view4data12=<?php echo $view4data12; ?>;
		var view4data13=<?php echo $view4data13; ?>;
		var view4data14=<?php echo $view4data14; ?>;

		var view4data21=<?php echo $view4data21; ?>;
		var view4data22=<?php echo $view4data22; ?>;
		var view4data23=<?php echo $view4data23; ?>;
		var view4data24=<?php echo $view4data24; ?>;

		var view4data31=<?php echo $view4data31; ?>;
		var view4data32=<?php echo $view4data32; ?>;
		var view4data33=<?php echo $view4data33; ?>;
		var view4data34=<?php echo $view4data34; ?>;

	</script>
	<script src="assets/js/custom.js"></script>





</body>

</html>
