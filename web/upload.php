<?php
require_once './import_data.php';
$year=$_POST['sel'];

if (!empty($_FILES['myfile'])) {//判断上传内容是否为空
    if ($_FILES['myfile']['error'] > 0) {//判断上传错误信息
        echo "上传错误：";
        switch ($_FILES['myfile']['error']) {
            case 1:
                echo "上传文件大小超出配置文件规定值";
                break;
            case 2:
                echo "上传文件大小超出表单中的约定值";
                break;
            case 3:
                echo "上传文件不全";
                break;
            case 4:
                echo "没有上传文件";
                break;
        }
    } else {
		// 允许上传的文件后缀
		$allowedExts = array("xls", "xlsx");
		$temp = explode(".", $_FILES["myfile"]["name"]);
		$extension = end($temp);     // 获取文件后缀名
		$file_type = $_FILES["myfile"]["type"];

		// echo ("$extension<br>") ;
		// echo ($file_type."<br>");

		if ((($file_type == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
			 || ($file_type == "application/octet-stream"))
			&& in_array($extension, $allowedExts))
        {
			if (!is_dir("./upfile")) {//判断指定目录是否存在
                mkdir("./upfile");//创建目录
            }
			// echo(time());
            $path = './upfile/' . time() . strtolower(strstr($_FILES['myfile']['name'], "."));
			//定义上传文件名和存储位置
			// echo($path."<br>");
			$excelpath= $path;
            if (is_uploaded_file($_FILES['myfile']['tmp_name'])) {//判断文件上传是否为HTTP POST上传
                if (!move_uploaded_file($_FILES['myfile']['tmp_name'],$path)) {//执行上传操作
                    echo "上传失败";
                } else {
                    echo $_FILES['myfile']['name'] . " 上传成功.";
					import_excel($excelpath, $year);
                }
            } else {
                echo "上传文件：".$_FILES['myfile']['name']."不合法";
            }

        } else {
			//限制文件格式
            echo "格式不正确,请上传xls或xlsx格式文件";
        }
    }
}

?>