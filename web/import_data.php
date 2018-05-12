<?php
/*
导入升学学生信息表
*/
function import_sheet_toNationalUniversity($objPHPExcel, $conn, $year){

	$sheet = $objPHPExcel->getSheet(0);	//读取第一个sheet
	$highestRow = $sheet->getHighestRow();   //取得总行数
	$highestColumn = $sheet->getHighestColumn(); //取得总列数
	$end_index = PHPExcel_Cell::columnIndexFromString($highestColumn);//由列名转为列数('AB'->28)

	// print("  high 11111 $highestRow, $highestColumn");

	// 保存列名和excel数值列名映射关系的数组
	$data = array();
	for($k=0;$k<=$end_index;$k++)            //从A列读取数据
	{
		$col_name = PHPExcel_Cell::stringFromColumnIndex($k);//由列数反转列名(0->'A')
		$str = $sheet->getCell($col_name."1")->getValue();//读取单元格
		$end_index = PHPExcel_Cell::columnIndexFromString($highestColumn);//由列名转为列数('AB'->28)

		if(!strcmp($str, "sfzh")){
			$data[$k] = "sfzh";
		} else if(!strcmp($str, "xm")){
			$data[$k] = "xm";
		} else if(!strcmp($str, "xb")){
			$data[$k] = "xb";
		} else if(!strcmp($str, "mz")){
			$data[$k] = "mz";
		} else if(!strcmp($str, "cc")){
			$data[$k] = "cc";
		} else if(!strcmp($str, "zy")){
			$data[$k] = "zy";
		} else if(!strcmp($str, "pyfs")){
			$data[$k] = "pyfs";
		} else if(!strcmp($str, "syszd")){
			$data[$k] = "syszd";
		} else if(!strcmp($str, "sfslb")){
			$data[$k] = "sfslb";
		} else if(!strcmp($str, "knslb")){
			$data[$k] = "knslb";
		} else if(!strcmp($str, "fy")){
			$data[$k] = "fy";
		} else if(!strcmp($str, "xh")){
			$data[$k] = "xh";
		} else if(!strcmp($str, "mobilephoneC")){
			$data[$k] = "mobilephoneC";
		} else if(!strcmp($str, "email")){
			$data[$k] = "email";
		} else if(!strcmp($str, "qq")){
			$data[$k] = "qq";
		} else if(!strcmp($str, "byqx")){
			$data[$k] = "byqx";
		} else if(!strcmp($str, "院校名称")){
			$data[$k] = "dwmc";
		} else if(!strcmp($str, "院校性质")){
			$data[$k] = "institution_category";
		} else if(!strcmp($str, "所在地区")){
			$data[$k] = "location";
		} else {
			$data[$k] = "others";
		}
	}

	for($j=2;$j<=$highestRow;$j++)                        //从第二行开始读取数据
	{
		$sfzh = $xm = $xb = $mz = $cc = $zy = $pyfs = $syszd = $institution_category = $location = "";
			$sfslb = $knslb = $fy = $xh = $mobilephoneC = $email = $qq = $byqx = $dwmc = $others = "";
		for($k=0;$k<=$end_index;$k++)            //从A列读取数据
		{
			$col_name = PHPExcel_Cell::stringFromColumnIndex($k);//由列数反转列名(0->'A')
			$str = $sheet->getCell("$col_name$j")->getValue();//读取单元格
			$str=mb_convert_encoding($str,'UTF-8','auto');//根据自己编码修改

			// 将读取出来的值赋给相应的变量
			if(!strcmp($data[$k], "sfzh")){
				$sfzh = $str;
			} else if(!strcmp($data[$k], "xm")){
				$xm = $str;
			} else if(!strcmp($data[$k], "xb")){
				$xb = $str;
			} else if(!strcmp($data[$k], "mz")){
				$mz = $str;
			} else if(!strcmp($data[$k], "cc")){
				$cc = $str;
			} else if(!strcmp($data[$k], "zy")){
				$zy = $str;
			} else if(!strcmp($data[$k], "pyfs")){
				$pyfs = $str;
			} else if(!strcmp($data[$k], "syszd")){
				$syszd = $str;
			} else if(!strcmp($data[$k], "sfslb")){
				$sfslb = $str;
			} else if(!strcmp($data[$k], "knslb")){
				$knslb = $str;
			} else if(!strcmp($data[$k], "fy")){
				$fy = $str;
			} else if(!strcmp($data[$k], "xh")){
				$xh = $str;
			} else if(!strcmp($data[$k], "mobilephoneC")){
				$mobilephoneC = $str;
			} else if(!strcmp($data[$k], "email")){
				$email = $str;
			} else if(!strcmp($data[$k], "qq")){
				$qq = $str;
			} else if(!strcmp($data[$k], "byqx")){
				$byqx = $str;
			} else if(!strcmp($data[$k], "dwmc")){
				$dwmc = $str;
			} else if(!strcmp($data[$k], "institution_category")){
				$institution_category = $str;
			} else if(!strcmp($data[$k], "location")){
				$location = $str;
			} else {
				$others = $str;
			}
		}

		if(!strcmp($dwmc, "")){
			$dwmc = "升学";
		}
		// sql语句添加信息
		// 添加DW表信息
		$sql = "insert into DW (dwmc) values ('$dwmc');";
		$result = $conn->query($sql);
		// 添加STUDENT表信息
		$sql = "insert into STUDENT (sfzh, year, xb, xm, mz, cc, zy, pyfs, syszd, knslb, fy, xh, qq, email,  mobile, byqx, dwmc) values ('$sfzh', '$year', '$xb', '$xm', '$mz', '$cc', '$zy', '$pyfs', '$syszd', '$knslb', '$fy', '$xh', '$qq', '$email', '$mobilephoneC', '$byqx', '$dwmc');";
		$result = $conn->query($sql);
		// 添加NATIONAL_UNIVERSITY表信息
		$sql = "insert into NATIONAL_UNIVERSITY (institution_category, location, dwmc) values ('$institution_category', '$location', '$dwmc');";
		$result = $conn->query($sql);
	}
}

/*
导入出国学生信息表
*/
function import_sheet_toForeignUniversity($objPHPExcel, $conn, $year){
	$sheet = $objPHPExcel->getSheet(1); //读取sheet
	$highestRow = $sheet->getHighestRow();   //取得总行数
	$highestColumn = $sheet->getHighestColumn(); //取得总列数
	$end_index = PHPExcel_Cell::columnIndexFromString($highestColumn);//由列名转为列数('AB'->28)

		// print("  high 22222 $highestRow, $highestColumn");

	// 保存列名和excel数值列名映射关系的数组
	$data = array();
	for($k=0;$k<=$end_index;$k++)            //从A列读取数据
	{
		$col_name = PHPExcel_Cell::stringFromColumnIndex($k);//由列数反转列名(0->'A')
		$str = $sheet->getCell($col_name."1")->getValue();//读取单元格

		if(!strcmp($str, "sfzh")){
			$data[$k] = "sfzh";
		} else if(!strcmp($str, "xm")){
			$data[$k] = "xm";
		} else if(!strcmp($str, "xb")){
			$data[$k] = "xb";
		} else if(!strcmp($str, "mz")){
			$data[$k] = "mz";
		} else if(!strcmp($str, "cc")){
			$data[$k] = "cc";
		} else if(!strcmp($str, "zy")){
			$data[$k] = "zy";
		} else if(!strcmp($str, "pyfs")){
			$data[$k] = "pyfs";
		} else if(!strcmp($str, "syszd")){
			$data[$k] = "syszd";
		} else if(!strcmp($str, "sfslb")){
			$data[$k] = "sfslb";
		} else if(!strcmp($str, "knslb")){
			$data[$k] = "knslb";
		} else if(!strcmp($str, "fy")){
			$data[$k] = "fy";
		} else if(!strcmp($str, "xh")){
			$data[$k] = "xh";
		} else if(!strcmp($str, "mobilephoneC")){
			$data[$k] = "mobilephoneC";
		} else if(!strcmp($str, "email")){
			$data[$k] = "email";
		} else if(!strcmp($str, "qq")){
			$data[$k] = "qq";
		} else if(!strcmp($str, "byqx")){
			$data[$k] = "byqx";
		} else if(!strcmp($str, "dwmc")){
			$data[$k] = "dwmc";
		} else if(!strcmp($str, "QS排名")){
			$data[$k] = "QS_rank";
		} else if(!strcmp($str, "所在国家")){
			$data[$k] = "country";
		} else {
			$data[$k] = "others";
		}
	}

	for($j=2;$j<=$highestRow;$j++)                        //从第二行开始读取数据
	{
		$sfzh = $xm = $xb = $mz = $cc = $zy = $pyfs = $syszd = $QS_rank = $country = "";
			$sfslb = $knslb = $fy = $xh = $mobilephoneC = $email = $qq = $byqx = $dwmc = $others = "";
		for($k=0;$k<=$end_index;$k++)            //从A列读取数据
		{
			$col_name = PHPExcel_Cell::stringFromColumnIndex($k);//由列数反转列名(0->'A')
			$str = $sheet->getCell("$col_name$j")->getValue();//读取单元格
			$str=mb_convert_encoding($str,'UTF-8','auto');//根据自己编码修改

			// 将读取出来的值赋给相应的变量
			if(!strcmp($data[$k], "sfzh")){
				$sfzh = $str;
			} else if(!strcmp($data[$k], "xm")){
				$xm = $str;
			} else if(!strcmp($data[$k], "xb")){
				$xb = $str;
			} else if(!strcmp($data[$k], "mz")){
				$mz = $str;
			} else if(!strcmp($data[$k], "cc")){
				$cc = $str;
			} else if(!strcmp($data[$k], "zy")){
				$zy = $str;
			} else if(!strcmp($data[$k], "pyfs")){
				$pyfs = $str;
			} else if(!strcmp($data[$k], "syszd")){
				$syszd = $str;
			} else if(!strcmp($data[$k], "sfslb")){
				$sfslb = $str;
			} else if(!strcmp($data[$k], "knslb")){
				$knslb = $str;
			} else if(!strcmp($data[$k], "fy")){
				$fy = $str;
			} else if(!strcmp($data[$k], "xh")){
				$xh = $str;
			} else if(!strcmp($data[$k], "mobilephoneC")){
				$mobilephoneC = $str;
			} else if(!strcmp($data[$k], "email")){
				$email = $str;
			} else if(!strcmp($data[$k], "qq")){
				$qq = $str;
			} else if(!strcmp($data[$k], "byqx")){
				$byqx = $str;
			} else if(!strcmp($data[$k], "dwmc")){
				$dwmc = $str;
			} else if(!strcmp($data[$k], "QS_rank")){
				$QS_rank = $str;
			} else if(!strcmp($data[$k], "country")){
				$country = $str;
			} else {
				$others = $str;
			}
		}

		if(!strcmp($dwmc, "")){
			$dwmc = "出国";
		}
		// sql语句添加信息
		// 添加DW表信息
		$sql = "insert into DW (dwmc) values ('$dwmc');";
		$result = $conn->query($sql);
		// 添加STUDENT表信息
		$sql = "insert into STUDENT (sfzh, year, xb, xm, mz, cc, zy, pyfs, syszd, knslb, fy, xh, qq, email,  mobile, byqx, dwmc) values ('$sfzh', '$year', '$xb', '$xm', '$mz', '$cc', '$zy', '$pyfs', '$syszd', '$knslb', '$fy', '$xh', '$qq', '$email', '$mobilephoneC', '$byqx', '$dwmc');";
		$result = $conn->query($sql);
		// 添加FOREIGN_UNIVERSITY表信息
		$sql = "insert into FOREIGN_UNIVERSITY (country, dwmc) values ('$country', '$dwmc');";
		$result = $conn->query($sql);
		// 添加 UNIVERSITY_RANK表信息
		$sql = "insert into UNIVERSITY_RANK (year, QS_rank, dwmc) values ('$year', '$QS_rank', '$dwmc');";
		$result = $conn->query($sql);
	}
}

/*
导入工作学生信息表
*/
function import_sheet_toCompany($objPHPExcel, $conn, $year){

	$sheet = $objPHPExcel->getSheet(2);
	$highestRow = $sheet->getHighestRow();   //取得总行数
	$highestColumn = $sheet->getHighestColumn(); //取得总列数
	$end_index = PHPExcel_Cell::columnIndexFromString($highestColumn);//由列名转为列数('AB'->28)

	// print("  high 33333 $highestRow, $highestColumn");

	$data = array();
	for($k=0;$k<=$end_index;$k++)            //从A列读取数据
	{
		$col_name = PHPExcel_Cell::stringFromColumnIndex($k);//由列数反转列名(0->'A')
		$str = $sheet->getCell($col_name."1")->getValue();//读取单元格

		if(!strcmp($str, "sfzh")){
			$data[$k] = "sfzh";
		} else if(!strcmp($str, "xm")){
			$data[$k] = "xm";
		} else if(!strcmp($str, "xb")){
			$data[$k] = "xb";
		} else if(!strcmp($str, "mz")){
			$data[$k] = "mz";
		} else if(!strcmp($str, "cc")){
			$data[$k] = "cc";
		} else if(!strcmp($str, "zy")){
			$data[$k] = "zy";
		} else if(!strcmp($str, "pyfs")){
			$data[$k] = "pyfs";
		} else if(!strcmp($str, "syszd")){
			$data[$k] = "syszd";
		} else if(!strcmp($str, "sfslb")){
			$data[$k] = "sfslb";
		} else if(!strcmp($str, "knslb")){
			$data[$k] = "knslb";
		} else if(!strcmp($str, "fy")){
			$data[$k] = "fy";
		} else if(!strcmp($str, "xh")){
			$data[$k] = "xh";
		} else if(!strcmp($str, "mobilephoneC")){
			$data[$k] = "mobilephoneC";
		} else if(!strcmp($str, "email")){
			$data[$k] = "email";
		} else if(!strcmp($str, "qq")){
			$data[$k] = "qq";
		} else if(!strcmp($str, "byqx")){
			$data[$k] = "byqx";
		} else if(!strcmp($str, "dwmc")){
			$data[$k] = "dwmc";
		} else if(!strcmp($str, "单位性质")){
			$data[$k] = "company_category";
		} else if(!strcmp($str, "单位行业")){
			$data[$k] = "company_industry";
		} else if(!strcmp($str, "所属单位")){
			$data[$k] = "parent_company";
		} else if(!strcmp($str, "五百强")){
			$data[$k] = "rank_500";
		} else if(!strcmp($str, "单位所在地")){
			$data[$k] = "location";
		} else {
			$data[$k] = "others";
		}
	}

	for($j=2;$j<=$highestRow;$j++)                        //从第二行开始读取数据
	{
		$sfzh = $xm = $xb = $mz = $cc = $zy = $pyfs = $syszd = $sfslb = $knslb = $fy = $xh = $mobilephoneC = $email = $qq = $byqx = $dwmc = $company_category = $company_industry = $parent_company = $location = $rank_500 = $others = "";
		for($k=0;$k<=$end_index;$k++)            //从A列读取数据
		{
			$col_name = PHPExcel_Cell::stringFromColumnIndex($k);//由列数反转列名(0->'A')
			$str = $sheet->getCell("$col_name$j")->getValue();//读取单元格
			$str=mb_convert_encoding($str,'UTF-8','auto');//根据自己编码修改

			if(!strcmp($data[$k], "sfzh")){
				$sfzh = $str;
			} else if(!strcmp($data[$k], "xm")){
				$xm = $str;
			} else if(!strcmp($data[$k], "xb")){
				$xb = $str;
			} else if(!strcmp($data[$k], "mz")){
				$mz = $str;
			} else if(!strcmp($data[$k], "cc")){
				$cc = $str;
			} else if(!strcmp($data[$k], "zy")){
				$zy = $str;
			} else if(!strcmp($data[$k], "pyfs")){
				$pyfs = $str;
			} else if(!strcmp($data[$k], "syszd")){
				$syszd = $str;
			} else if(!strcmp($data[$k], "sfslb")){
				$sfslb = $str;
			} else if(!strcmp($data[$k], "knslb")){
				$knslb = $str;
			} else if(!strcmp($data[$k], "fy")){
				$fy = $str;
			} else if(!strcmp($data[$k], "xh")){
				$xh = $str;
			} else if(!strcmp($data[$k], "mobilephoneC")){
				$mobilephoneC = $str;
			} else if(!strcmp($data[$k], "email")){
				$email = $str;
			} else if(!strcmp($data[$k], "qq")){
				$qq = $str;
			} else if(!strcmp($data[$k], "byqx")){
				$byqx = $str;
			} else if(!strcmp($data[$k], "dwmc")){
				$dwmc = $str;
			} else if(!strcmp($data[$k], "company_category")){
				$company_category = $str;
			} else if(!strcmp($data[$k], "company_industry")){
				$company_industry = $str;
			} else if(!strcmp($data[$k], "parent_company")){
				$parent_company = $str;
			} else if(!strcmp($data[$k], "location")){
				$substr = substr($str,0,6);
				$location = $substr;
			} else if(!strcmp($data[$k], "rank_500")){
				$rank_500 = $str;
			} else {
				$others = $str;
			}
		}

		if(!strcmp($dwmc, "")){
			$dwmc = "就业";
		}
		// sql语句添加信息
		// 添加DW表信息
		$sql = "insert into DW (dwmc) values ('$dwmc');";
		$result = $conn->query($sql);
		// 添加STUDENT表信息
		$sql = "insert into STUDENT (sfzh, year, xb, xm, mz, cc, zy, pyfs, syszd, knslb, fy, xh, qq, email,  mobile, byqx, dwmc) values ('$sfzh', '$year', '$xb', '$xm', '$mz', '$cc', '$zy', '$pyfs', '$syszd', '$knslb', '$fy', '$xh', '$qq', '$email', '$mobilephoneC', '$byqx', '$dwmc');";
		$result = $conn->query($sql);
		// 添加COMPANY表信息
		$sql = "insert into COMPANY (company_category, company_industry, parent_company, location, dwmc) values ('$company_category', '$company_industry', '$parent_company', '$location', '$dwmc');";
		$result = $conn->query($sql);
		// 添加COMPANY_RANK表信息
		$sql = "insert into COMPANY_RANK (year, rank_500, dwmc) values ('$year', '$rank_500', '$dwmc');";
		$result = $conn->query($sql);
	}
}

/*
导入未就业学生信息表
*/
function import_sheet_toStudent($objPHPExcel, $conn, $year){

	$sheet = $objPHPExcel->getSheet(6);
	$highestRow = $sheet->getHighestRow();   //取得总行数
	$highestColumn = $sheet->getHighestColumn(); //取得总列数
	$end_index = PHPExcel_Cell::columnIndexFromString($highestColumn);//由列名转为列数('AB'->28)

	// print("  high 4444444 $highestRow, $highestColumn");

	$data = array();
	$dwmc = "未就业";
	for($k=0;$k<=$end_index;$k++)            //从A列读取数据
	{
		$col_name = PHPExcel_Cell::stringFromColumnIndex($k);//由列数反转列名(0->'A')
		$str = $sheet->getCell($col_name."1")->getValue();//读取单元格

		if(!strcmp($str, "sfzh")){
			$data[$k] = "sfzh";
		} else if(!strcmp($str, "xm")){
			$data[$k] = "xm";
		} else if(!strcmp($str, "xb")){
			$data[$k] = "xb";
		} else if(!strcmp($str, "mz")){
			$data[$k] = "mz";
		} else if(!strcmp($str, "cc")){
			$data[$k] = "cc";
		} else if(!strcmp($str, "zy")){
			$data[$k] = "zy";
		} else if(!strcmp($str, "pyfs")){
			$data[$k] = "pyfs";
		} else if(!strcmp($str, "syszd")){
			$data[$k] = "syszd";
		} else if(!strcmp($str, "sfslb")){
			$data[$k] = "sfslb";
		} else if(!strcmp($str, "knslb")){
			$data[$k] = "knslb";
		} else if(!strcmp($str, "fy")){
			$data[$k] = "fy";
		} else if(!strcmp($str, "xh")){
			$data[$k] = "xh";
		} else if(!strcmp($str, "mobilephoneC")){
			$data[$k] = "mobilephoneC";
		} else if(!strcmp($str, "email")){
			$data[$k] = "email";
		} else if(!strcmp($str, "qq")){
			$data[$k] = "qq";
		} else if(!strcmp($str, "byqx")){
			$data[$k] = "byqx";
		} else {
			$data[$k] = "others";
		}
	}

	for($j=2;$j<=$highestRow;$j++)                        //从第二行开始读取数据
	{
		$sfzh = $xm = $xb = $mz = $cc = $zy = $pyfs = $syszd = $sfslb = $knslb = $fy = $xh = $mobilephoneC = $email = $qq = $byqx = "";
		for($k=0;$k<=$end_index;$k++)            //从A列读取数据
		{
			$col_name = PHPExcel_Cell::stringFromColumnIndex($k);//由列数反转列名(0->'A')
			$str = $sheet->getCell("$col_name$j")->getValue();//读取单元格
			$str=mb_convert_encoding($str,'UTF-8','auto');//根据自己编码修改

			if(!strcmp($data[$k], "sfzh")){
				$sfzh = $str;
			} else if(!strcmp($data[$k], "xm")){
				$xm = $str;
			} else if(!strcmp($data[$k], "xb")){
				$xb = $str;
			} else if(!strcmp($data[$k], "mz")){
				$mz = $str;
			} else if(!strcmp($data[$k], "cc")){
				$cc = $str;
			} else if(!strcmp($data[$k], "zy")){
				$zy = $str;
			} else if(!strcmp($data[$k], "pyfs")){
				$pyfs = $str;
			} else if(!strcmp($data[$k], "syszd")){
				$syszd = $str;
			} else if(!strcmp($data[$k], "sfslb")){
				$sfslb = $str;
			} else if(!strcmp($data[$k], "knslb")){
				$knslb = $str;
			} else if(!strcmp($data[$k], "fy")){
				$fy = $str;
			} else if(!strcmp($data[$k], "xh")){
				$xh = $str;
			} else if(!strcmp($data[$k], "mobilephoneC")){
				$mobilephoneC = $str;
			} else if(!strcmp($data[$k], "email")){
				$email = $str;
			} else if(!strcmp($data[$k], "qq")){
				$qq = $str;
			} else if(!strcmp($data[$k], "byqx")){
				$byqx = $str;
			} else {
				$others = $str;
			}
		}

		if(!strcmp($dwmc, "")){
			$dwmc = "未就业";
		}
		$sql = "insert into DW (dwmc) values ('$dwmc');";
		$result = $conn->query($sql);

		$sql = "insert into STUDENT (sfzh, year, xb, xm, mz, cc, zy, pyfs, syszd, knslb, fy, xh, qq, email,  mobile, byqx, dwmc) values ('$sfzh', '$year', '$xb', '$xm', '$mz', '$cc', '$zy', '$pyfs', '$syszd', '$knslb', '$fy', '$xh', '$qq', '$email', '$mobilephoneC', '$byqx', '$dwmc');";
		$result = $conn->query($sql);
		// print(" $j  ");
	}
}

/*
导入Excel
*/
function import_excel($excelpath, $year){
                ini_set("memory_limit", "512M");

	// 导入PHPExcel文件
	require_once './PHPExcel/PHPExcel.php';
	require_once './PHPExcel/PHPExcel/IOFactory.php';
	require_once './PHPExcel/PHPExcel/Reader/Excel5.php';
	// 导入连接数据库文件
	require_once './conn.php';
	$cacheMethod = PHPExcel_CachedObjectStorageFactory::cache_in_memory_serialized;
	$cacheSettings = array('memoryCacheSize'=>'512MB');
	PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);

	$objReader = PHPExcel_IOFactory::createReader('Excel2007'); //创建读取excel类
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($excelpath);

	// 导入数据
	import_sheet_toNationalUniversity($objPHPExcel, $conn, $year);
	import_sheet_toForeignUniversity($objPHPExcel, $conn, $year);
	import_sheet_toCompany($objPHPExcel, $conn, $year);
	import_sheet_toStudent($objPHPExcel, $conn, $year);
}

?>
