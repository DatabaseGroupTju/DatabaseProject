<!-- 判断用户是否已经注销 -->
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
    <script src="assets/js/jquery.form.js"></script>
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

	<!-- 添加select组件 -->
	<script type="text/javascript">
    onload = function ()
    {
       var year=new Date().getFullYear(); //获取当前年份

       var sel = document.getElementById ('sel');//获取select下拉列表
       for ( var i = year; i >= 2000; i--)//循环添加2000到当前年份,依次添加到下拉列表
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
			欢迎  <small><?php echo $_SESSION['name'] ; ?></small>
			</h1>
			<ol class="breadcrumb">
			<li><a href="index.php">主页</a></li>
			<li class="active">导入数据</li>
			</ol>
		</div>
		<div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <!--   Kitchen Sink -->
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                导入数据
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<label>选择数据年份：</label><select id="sel" name="sel"></select><br>
				<input type="file" name="myfile" /><br>
				<input type="submit" value="上传数据">
			</form>

			<div class="progress">
			<div class="bar"></div >
			<div class="percent">0%</div >
			</div>

			<div id="status"></div>
			</div>
			</div>
			</div>
			</div>
			</div>


			<!-- ajax异步提交文件-->
			<script>
			$(function(){
				var bar = $('.bar');
				var percent = $('.percent');
				var status = $('#status');
				$('form').ajaxForm({
					beforeSerialize:function(){
					//alert("表单数据序列化前执行的操作！");
				},
				beforeSubmit:function(){
					//alert("表单提交前的操作");
					var filesize = $("input[type='file']")[0].files[0].size/1024/1024;
					if(filesize > 50){
						alert("文件大小超过限制，最多50M");
						return false;
				}

				// 验证表单数据是否为空
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
</body>

</html>
