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
	<script src="assets/js/jsAddress.js"></script>
	<script src="assets/js/jsCollege.js"></script>

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
					<li>修改毕业生信息</li>
					<li class="active">插入</li>
				</ol>
			</div>

			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<!--   Kitchen Sink -->
						<div class="panel panel-default">
							<div class="panel-heading text-center">
								插入升学学生信息
							</div>
							<div class="panel-body">
								<div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
									<form method="post" action="insert/insert_graduate.php" class="form-horizontal" role="form">
										<span style="color:red">*</span>
										输入年份：
										<input type="number" required name="year">
										<br>
										<br>

										选择性别：
										<select name="xb">
											<option value="男">男</option>
											<option value="女">女</option>
										</select>
										<br>
										<br>

										<span style="color:red">*</span>
										输入姓名：
										<input type="text" required name="xm">
										<br>
										<br>

										选择民族：
										<select name="mz">
											<option value="汉族">汉族</option>
											<option value="壮族">壮族</option>
											<option value="藏族">藏族</option>
											<option value="裕固族">裕固族</option>
											<option value="彝族">彝族</option>
											<option value="瑶族">瑶族</option>
											<option value="锡伯族">锡伯族</option>
											<option value="乌孜别克族">乌孜别克族</option>
											<option value="维吾尔族">维吾尔族</option>
											<option value="佤族">佤族</option>
											<option value="土家族">土家族</option>
											<option value="土族">土族</option>
											<option value="塔塔尔族">塔塔尔族</option>
											<option value="塔吉克族">塔吉克族</option>
											<option value="水族">水族</option>
											<option value="畲族">畲族</option>
											<option value="撒拉族">撒拉族</option>
											<option value="羌族">羌族</option>
											<option value="普米族">普米族</option>
											<option value="怒族">怒族</option>
											<option value="纳西族">纳西族</option>
											<option value="仫佬族">仫佬族</option>
											<option value="苗族">苗族</option>
											<option value="蒙古族">蒙古族</option>
											<option value="门巴族">门巴族</option>
											<option value="毛南族">毛南族</option>
											<option value="满族">满族</option>
											<option value="珞巴族">珞巴族</option>
											<option value="僳僳族">僳僳族</option>
											<option value="黎族">黎族</option>
											<option value="拉祜族">拉祜族</option>
											<option value="柯尔克孜族">柯尔克孜族</option>
											<option value="景颇族">景颇族</option>
											<option value="京族">京族</option>
											<option value="基诺族">基诺族</option>
											<option value="回族">回族</option>
											<option value="赫哲族">赫哲族</option>
											<option value="哈萨克族">哈萨克族</option>
											<option value="哈尼族">哈尼族</option>
											<option value="仡佬族">仡佬族</option>
											<option value="高山族">高山族</option>
											<option value="鄂温克族">鄂温克族</option>
											<option value="俄罗斯族">俄罗斯族</option>
											<option value="鄂伦春族">鄂伦春族</option>
											<option value="独龙族">独龙族</option>
											<option value="东乡族">东乡族</option>
											<option value="侗族">侗族</option>
											<option value="德昂族">德昂族</option>
											<option value="傣族">傣族</option>
											<option value="达斡尔族">达斡尔族</option>
											<option value="朝鲜族">朝鲜族</option>
											<option value="布依族">布依族</option>
											<option value="布朗族">布朗族</option>
											<option value="保安族">保安族</option>
											<option value="白族">白族</option>
											<option value="阿昌族">阿昌族</option>
										</select>
										<br>
										<br> 选择学历与专业：


										<select id="cc" name="cc"></select><br><br>
										<select id="xy" name="xy"></select><br><br>
										<select id="zy" name="zy"></select><br>

										<br> 选择生源所在地：<br><br>


										<select id="cmbProvince" name="cmbProvince"></select>
										<select id="cmbCity" name="cmbCity"></select>
										<select id="cmbArea" name="cmbArea"></select>
										<br>
										<br> 选择培养方向：
										<select name="pyfx">
											<option value="非定向">非定向</option>
											<option value="定向">定向</option>
										</select>
										<br>
										<br> 选择困难生类别：


										<select name="knslb">
											<option value="非困难生">非困难生</option>
											<option value="家庭困难">家庭困难</option>
										</select>
										<br>
										<br>


										<span style="color:red">*</span>
										输入学号：
										<input type="text" required name="xh">
										<br><br>

										<span style="color:red">*</span>
										输入身份证号：
										<input type="text" required name="sfzh">
										<br><br>

										输入QQ：
										<input type="text" name="qq">
										<br><br>
										输入邮箱：
										<input type="text" name="email">
										<br><br>
										输入电话：
										<input type="text" name="mobile">
										<br><br>

										选择毕业去向：
										<select name="byqx">
											<option value="升学">升学</option>
											<option value="出国、出境">出国、出境</option>
											<option value="签就业协议形式就业">签就业协议形式就业</option>
											<option value="未就业">未就业</option>
										</select>
										<br>
										<br> 填写升学院校：

										<input type="text" name="dwmc">
										<br><br>
										选择院校所在省市：
										<select name="location">
											<option value="北京市">北京市</option>
											<option value="天津市">天津市</option>
											<option value="上海市">上海市</option>
											<option value="重庆市">重庆市</option>
											<option value="河北省">河北省</option>
											<option value="山西省">山西省</option>
											<option value="辽宁省">辽宁省</option>
											<option value="吉林省">吉林省</option>
											<option value="黑龙江省">黑龙江省</option>
											<option value="江苏省">江苏省</option>
											<option value="浙江省">浙江省</option>
											<option value="安徽省">安徽省</option>
											<option value="福建省">福建省</option>
											<option value="江西省">江西省</option>
											<option value="山东省">山东省</option>
											<option value="河南省">河南省</option>
											<option value="湖北省">湖北省</option>
											<option value="湖南省">湖南省</option>
											<option value="广东省">广东省</option>
											<option value="海南省">海南省</option>
											<option value="四川省">四川省</option>
											<option value="贵州省">贵州省</option>
											<option value="云南省">云南省</option>
											<option value="陕西省">陕西省</option>
											<option value="甘肃省">甘肃省</option>
											<option value="青海省">青海省</option>
											<option value="台湾省">台湾省</option>
											<option value="内蒙古自治区">内蒙古自治区</option>
											<option value="广西壮族自治区">广西壮族自治区</option>
											<option value="西藏自治区">西藏自治区</option>
											<option value="宁夏回族自治区">宁夏回族自治区</option>
											<option value="新疆维吾尔自治区">新疆维吾尔自治区</option>
											<option value="香港特别行政区">香港特别行政区</option>
											<option value="澳门特别行政区">澳门特别行政区</option>
										</select>
										<br>
										<br> 选择学校类别：

										<select name="institution_category">
											<option value="985院校">985院校</option>
											<option value="211院校">211院校</option>
											<option value="非985/211院校">非985/211院校</option>
										</select>
										<br>
										<br>

										<input type="submit" name="submit" value="添加">
									</form>

								</div>
								<!-- /. PAGE INNER  -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /. PAGE WRAPPER  -->
	</div>
	<!-- /. WRAPPER  -->
	<script type="text/javascript">
		collegeInit('cc', 'xy', 'zy');
		addressInit('cmbProvince', 'cmbCity', 'cmbArea');
	</script>



</body>

</html>
