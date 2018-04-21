
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
	<!-- Morris Chart Styles-->
	<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<!-- Custom Styles-->
	<link href="assets/css/custom-styles.css" rel="stylesheet" />
	<!-- Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">

	<script type="text/javascript">
    onload = function ()
    {
         var year=new Date().getFullYear(); //获取当前年份

       var sel = document.getElementById ('sel');//获取select下拉列表
       for ( var i = year+3; i >= 2000; i--)//循环添加2006到当前年份加3年的每个年份依次添加到下拉列表
       {
           var option = document.createElement ('option');
           option.value = i;
           var txt = document.createTextNode (i);
           option.appendChild (txt);
           sel.appendChild (option);
       }
    }
	</script>

</head>

<body>
	<div id="wrapper">
	<?php require 'nav.php'; ?>
		<div id="page-wrapper">
		<div class="header">
			<h1 class="page-header">
			信息栏 <small>欢迎<?php echo $_SESSION['name'] ; ?></small>
			</h1>
			<ol class="breadcrumb">
			<li><a href="index.php">主页</a></li>
			<li class="active">导入数据</li>
			</ol>
		</div>
		<div id="page-inner">
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<label>选择数据年份：</label><select id="sel" name="sel"></select><br>
				<input type="file" name="myfile" /><br>
				<input type="submit" value="Upload File to Server">
			</form>

			<div class="progress">
			<div class="bar"></div >
			<div class="percent">0%</div >
			</div>

			<div id="status"></div>
			
			<!-- jQuery Js -->
			<script src="assets/js/jquery-1.10.2.js"></script>
			<script src="assets/js/jquery.form.js"></script>
			<!--<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
			<script src="assets/js/jquery.form.js"></script>-->
			
			<script>
			$(function(){
				var bar = $('.bar');
				var percent = $('.percent');
				var status = $('#status');
				$('form').ajaxForm({
					beforeSerialize:function(){
					//alert("表单数据序列化前执行的操作！");
					//$("#txt2").val("java");//如：改变元素的值
				},
				beforeSubmit:function(){
					//alert("表单提交前的操作");
					var filesize = $("input[type='file']")[0].files[0].size/1024/1024;
					if(filesize > 50){
						alert("文件大小超过限制，最多50M");
                    return false;
                }
                //if($("#txt1").val()==""){return false;}//如：验证表单数据是否为空
				},
				beforeSend: function() {
					status.empty();
					var percentVal = '0%';
					bar.width(percentVal)
					percent.html(percentVal);
				},
				uploadProgress: function(event, position, total, percentComplete) {//上传的过程
					//position 已上传了多少
					//total 总大小
					//已上传的百分数
					var percentVal = percentComplete + '%';
					bar.width(percentVal)
					percent.html(percentVal);
					//console.log(percentVal, position, total);
				},
				success: function(data) {//成功
					var percentVal = '100%';
					bar.width(percentVal)
					percent.html(percentVal);
					alert(data);
				},
				error:function(err){//失败
					alert("表单提交异常！"+err.msg);
				},
				complete: function(xhr) {//完成
					status.html(xhr.responseText);
				}
			});

		});
	</script>

		</div>
		<!-- /. PAGE INNER  -->
		</div>
		<!-- /. PAGE WRAPPER  -->
		</div>
		<!-- /. WRAPPER  -->
	<!-- JS Scripts-->
	
	<!-- Bootstrap Js -->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Metis Menu Js -->
	<script src="assets/js/jquery.metisMenu.js"></script>

	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>

	<script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>

	<!-- Custom Js -->
	<script src="assets/js/custom-scripts.js"></script>

</body>

</html>
