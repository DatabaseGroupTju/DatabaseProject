
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
	<script type="text/javascript" src="jsAddress.js"></script>
	<script type="text/javascript" src="jsCollege.js"></script>
	<style type="text/css">  
        /* CSS样式制作 */  
        .tab-div {  
            width: 400px;  
            position: relative; /*作为选项卡内容的定位*/  
        }  
        ul {  
            list-style: none;  
        }  
        .tab {  
            width: 400px;  
            overflow: hidden;  
            margin: 0;  
            padding: 0;  
			text-align:center;
  
            position: relative;  
            z-index: 2;  
        }  
        .tab li{  
            float: left;  
            width: 80px;  
            height: 30px;  
            line-height: 30px;   
            border: 1px solid #DDD;  
            border-bottom: 0;  
            margin-left: 10px;  
            background: #fff;  
            cursor: pointer;  
        }  
        .tab-content {  
            width: 400px;  
            /*position: absolute;*/  
            border: 1px solid #DDD;  
            border-top: 3px solid #e4393c;   
  
            position: absolute;  
            top: 31px;  
            left: 0;  
        }  
        .tab-content ul {  
            margin: 0;  
            padding: 10px;  
        }  
        .tab-content li {  
            padding: 10px;  
        }  
        .tab-content li a {  
            color: #000;  
            text-decoration: none;  
        }  
        .tab-content li a:hover {  
            color: #e4393c;  
            text-decoration: underline;  
        }  
        .tab .tab-active {  
            border-top: 3px solid #e4393c;  
            border-bottom: 3px solid #fff;  
        }  
        .tab-content-show {  
            display: block;  
        }  
        .tab-content-hide {  
            display: none;  
        }  
    </style>  
	 <script type="text/javascript">  
        // JS实现选项卡切换  
        window.onload = function() {  
            var tabList = document.getElementById("tab-list");  
            var aLis = tabList.getElementsByTagName("li");  
            var tDiv = document.getElementById("tDiv");  
            var contents = tDiv.getElementsByTagName("div");  
  
            for(var i = 0; i < aLis.length; i++) {  
                aLis[i].index = i;  
                aLis[i].onclick = function() {  
                    for(var j = 0; j < aLis.length; j++) {  
                        aLis[j].className = '';  
                    }  
                    this.className = "tab-active";  
  
                    for(var j = 0; j < contents.length; j++) {  
                        contents[j].className = "tab-content tab-content-hide";  
                    }  
                    contents[this.index].className = "tab-content tab-content-show";  
                };  
            }  
        };
	</script>		
</head>

<body>
	 
	<div id="wrapper">
	<?php require 'nav.php'; ?>
	
		<div id="page-wrapper">
		    <div class="header"> 
				<h1 class="page-header">
					欢迎 <small>test<?php echo $_SESSION['name'] ; ?></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">主页</a></li>
					<li>修改毕业生信息</li>
					<li class="active">插入</li>
				</ol> 
			</div>
		
			<div id="page-inner">
 			
					<form method="post" action="insert_graduate.php">
					

					<span style="color:red">*</span>
					输入年份： <input type="number" required name="year" ></p>
			
					选择性别： <select name="xb">
						<option value ="男">男</option>
						<option value ="女">女</option>
						</select>
						<br><br>
			
					<span style="color:red">*</span>
					输入姓名： <input type="text" required name="xm"></p>
			
					选择民族： <select name="mz">
					    <option value ="汉族">汉族</option>
						<option value ="壮族">壮族</option>
						<option value ="藏族">藏族</option>
						<option value ="裕固族">裕固族</option>
						<option value ="彝族">彝族</option>
						<option value ="瑶族">瑶族</option>
						<option value ="锡伯族">锡伯族</option>
						<option value ="乌孜别克族">乌孜别克族</option>
						<option value ="维吾尔族">维吾尔族</option>
						<option value ="佤族">佤族</option>
						<option value ="土家族">土家族</option>
						<option value ="土族">土族</option>
						<option value ="塔塔尔族">塔塔尔族</option>
						<option value ="塔吉克族">塔吉克族</option>
						<option value ="水族">水族</option>
						<option value ="畲族">畲族</option>
						<option value ="撒拉族">撒拉族</option>
						<option value ="羌族">羌族</option>
						<option value ="普米族">普米族</option>
						<option value ="怒族">怒族</option>
						<option value ="纳西族">纳西族</option>
						<option value ="仫佬族">仫佬族</option>
						<option value ="苗族">苗族</option>
						<option value ="蒙古族">蒙古族</option>
						<option value ="门巴族">门巴族</option>
						<option value ="毛南族">毛南族</option>
						<option value ="满族">满族</option>
						<option value ="珞巴族">珞巴族</option>
						<option value ="僳僳族">僳僳族</option>
						<option value ="黎族">黎族</option>
						<option value ="拉祜族">拉祜族</option>
						<option value ="柯尔克孜族">柯尔克孜族</option>
						<option value ="景颇族">景颇族</option>
						<option value ="京族">京族</option>
						<option value ="基诺族">基诺族</option>
						<option value ="回族">回族</option>
						<option value ="赫哲族">赫哲族</option>
						<option value ="哈萨克族">哈萨克族</option>
						<option value ="哈尼族">哈尼族</option>
						<option value ="仡佬族">仡佬族</option>
						<option value ="高山族">高山族</option>
						<option value ="鄂温克族">鄂温克族</option>
						<option value ="俄罗斯族">俄罗斯族</option>
						<option value ="鄂伦春族">鄂伦春族</option>
						<option value ="独龙族">独龙族</option>
						<option value ="东乡族">东乡族</option>
						<option value ="侗族">侗族</option>
						<option value ="德昂族">德昂族</option>
						<option value ="傣族">傣族</option>
						<option value ="达斡尔族">达斡尔族</option>
						<option value ="朝鲜族">朝鲜族</option>
						<option value ="布依族">布依族</option>
						<option value ="布朗族">布朗族</option>
						<option value ="保安族">保安族</option>
						<option value ="白族">白族</option>
						<option value ="阿昌族">阿昌族</option>
						</select>
						<br><br>
						
			
					选择学历与专业：<select id="cc" name="cc"></select>  
									 <select id="xy" name="xy"></select>  
									 <select id="zy" name="zy"></select>
									 <br><br>
							 
						
					选择生源所在地：<select id="cmbProvince" name="cmbProvince"></select>  
									<select id="cmbCity" name="cmbCity"></select>  
									<select id="cmbArea" name="cmbArea"></select> 
									<br><br>
							 
					
					选择培养方向： <select name="pyfx">
									<option value ="非定向">非定向</option>
									<option value ="定向">定向</option>
									</select>
									<br><br>
							
			
					选择困难生类别：<select name="knslb">
									<option value ="非困难生">非困难生</option>
									<option value ="家庭困难">家庭困难</option>
									</select>
									<br><br>
							  
							   
					<span style="color:red">*</span>
					输入学号：<input type="text" required name="xh"></p>
			
					<span style="color:red">*</span>
					输入身份证号：<input type="text" required name="sfzh"></p>
			
					输入QQ： <input type="text" name="qq"></p>
					输入邮箱：<input type="text" name="email"></p>
					输入电话：<input type="text" name="mobile"></p>
			
					选择毕业去向： <select name="byqx">
									<option value ="升学">升学</option>
									<option value ="出国、出境">出国、出境</option>
									<option value ="签就业协议形式就业">签就业协议形式就业</option>
									<option value ="未就业">未就业</option>
									</select>
									<br><br>
					
				<div id="tDiv" class="tab-div">  
					<ul id="tab-list" class="tab">  
					<li class="tab-active">升学</li>  
					<li>出国</li>  
					<li>就业</li> 
					<li>未就业</li> 
					</ul>
				
					<div class="tab-content tab-content-show"> 
 					
					<form method="post" action="insert_graduate.php">
					<ul>
					<li>填写升学院校：<input type="text" name="dwmc"></input></li>
					<li>选择院校所在省市：<select name="location">
							              <option value ="北京市">北京市</option>
							              <option value ="天津市">天津市</option>
										  <option value ="上海市">上海市</option>
										  <option value ="重庆市">重庆市</option>
										  <option value ="河北省">河北省</option>
										  <option value ="山西省">山西省</option>
										  <option value ="辽宁省">辽宁省</option>
										  <option value ="吉林省">吉林省</option>
										  <option value ="黑龙江省">黑龙江省</option>
										  <option value ="江苏省">江苏省</option>
										  <option value ="浙江省">浙江省</option>
										  <option value ="安徽省">安徽省</option>
										  <option value ="福建省">福建省</option>
										  <option value ="江西省">江西省</option>
										  <option value ="山东省">山东省</option>
										  <option value ="河南省">河南省</option>
										  <option value ="湖北省">湖北省</option>
										  <option value ="湖南省">湖南省</option>
										  <option value ="广东省">广东省</option>
										  <option value ="海南省">海南省</option>
										  <option value ="四川省">四川省</option>
										  <option value ="贵州省">贵州省</option>
										  <option value ="云南省">云南省</option>
										  <option value ="陕西省">陕西省</option>
										  <option value ="甘肃省">甘肃省</option>
										  <option value ="青海省">青海省</option>
										  <option value ="台湾省">台湾省</option>
										  <option value ="内蒙古自治区">内蒙古自治区</option>
										  <option value ="广西壮族自治区">广西壮族自治区</option>
										  <option value ="西藏自治区">西藏自治区</option>
										  <option value ="宁夏回族自治区">宁夏回族自治区</option>
										  <option value ="新疆维吾尔自治区">新疆维吾尔自治区</option>
										  <option value ="香港特别行政区">香港特别行政区</option>
										  <option value ="澳门特别行政区">澳门特别行政区</option>
							              </select>
										  </li>
					<li>选择学校类别：<select name="institution_catagory">
							<option value ="985院校">985院校</option>
							<option value ="211院校">211院校</option>
							<option value ="非985/211院校">非985/211院校</option>
							</select>
					</li>
					<ul>
			    
					</div>
				
					<div class="tab-content tab-content-hide"> 

					<ul>
					
					<li>填写升学院校：<input type="text" name="dwmc"></li>		  
					<li>填写院校所在国家：<input type="text" name="country"></li>
					<li>填写QS排名：<input type="number" name="QS_rank"></li>
			

					</ul>
					
					
					</div> 
				
					<div class="tab-content tab-content-hide"> 
					<ul>
												  
					<li>填写单位名称：<input type="text" name="dwmc"></li>
					<li>选择公司类型：<select name="company_catagory">
									   <option value ="国企">国企</option>
									   <option value ="央企">央企</option>
									   <option value ="三资企业">三资企业</option>
									   </select></li>
					<li>选择公司行业：<select name="company_industry">
									   <option value ="房地产/建筑/工程建设">房地产/建筑/工程建设</option>
									   <option value ="制造业">制造业</option>
									   <option value ="贸易/批发/零售">贸易/批发/零售</option>
									   </select></li>
					<li>选择公司所在省市：<select name="location">
							              <option value ="北京市">北京市</option>
							              <option value ="天津市">天津市</option>
										  <option value ="上海市">上海市</option>
										  <option value ="重庆市">重庆市</option>
										  <option value ="河北省">河北省</option>
										  <option value ="山西省">山西省</option>
										  <option value ="辽宁省">辽宁省</option>
										  <option value ="吉林省">吉林省</option>
										  <option value ="黑龙江省">黑龙江省</option>
										  <option value ="江苏省">江苏省</option>
										  <option value ="浙江省">浙江省</option>
										  <option value ="安徽省">安徽省</option>
										  <option value ="福建省">福建省</option>
										  <option value ="江西省">江西省</option>
										  <option value ="山东省">山东省</option>
										  <option value ="河南省">河南省</option>
										  <option value ="湖北省">湖北省</option>
										  <option value ="湖南省">湖南省</option>
										  <option value ="广东省">广东省</option>
										  <option value ="海南省">海南省</option>
										  <option value ="四川省">四川省</option>
										  <option value ="贵州省">贵州省</option>
										  <option value ="云南省">云南省</option>
										  <option value ="陕西省">陕西省</option>
										  <option value ="甘肃省">甘肃省</option>
										  <option value ="青海省">青海省</option>
										  <option value ="台湾省">台湾省</option>
										  <option value ="内蒙古自治区">内蒙古自治区</option>
										  <option value ="广西壮族自治区">广西壮族自治区</option>
										  <option value ="西藏自治区">西藏自治区</option>
										  <option value ="宁夏回族自治区">宁夏回族自治区</option>
										  <option value ="新疆维吾尔自治区">新疆维吾尔自治区</option>
										  <option value ="香港特别行政区">香港特别行政区</option>
										  <option value ="澳门特别行政区">澳门特别行政区</option>
							              </select>
										  </li>
					<li>填写公司总部名称：<input type="text" name="parent_company"></li>
					<li>若公司位于五百强，填写排名：<input type="number" name="rank_500"></li>

					</ul>
					</div> 
					
					<div class="tab-content tab-content-hide"> 

					<ul>
					
					<li>填写未就业原因：<input type="text" name="dwmc"></li>		 
					</ul>
					
					</div> 
				
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

				<input type="submit" name="submit" value="添加">		
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
		
		<script type="text/javascript">
			collegeInit('cc', 'xy', 'zy');
			addressInit('cmbProvince', 'cmbCity', 'cmbArea');  	
		</script>

	

</body>

</html>

