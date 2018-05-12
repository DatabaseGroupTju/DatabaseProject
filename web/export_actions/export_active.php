<?php   
header("Content-type: text/html;charset=utf-8");//防止乱码
// $conn=@mysql_connect("localhost","root","be4nfanqrilq");
// if(!$conn){
//     //mysql_error()是返回mysql的上一次操作
//     die("连接失败".mysql_error());
// }else{
//         //echo '连接成功！<br/>';
// }
// //选择对应的数据库
// @mysql_select_db("InfoSystem");
// //设置操作编码
// mysql_query("set names utf8");//保证是按照utf8码操作的【utf8无-的，有-的是网页版的！！！！！！！】

$PDO = new PDO('mysql:host=127.0.0.1;dbname=InfoSystem','root','be4nfanqrilq');
if ($PDO == false) {
    print_r($PDO->errorInfo());
}

$year = $_POST['year'];
$sql1="SELECT * FROM nationalUniversityView where year = $year";  
$sql2="SELECT * FROM foreignUniversityView where year = $year";  
$sql3="SELECT * FROM companyView where year = $year"; 
$sql4="SELECT * FROM STUDENT where dwmc = '未就业' and year = $year"; 


$query1 = $PDO->query($sql1);
if ($query1 !== false) {
        $data1 = $query1->fetchAll(PDO::FETCH_ASSOC);
}
elseif ($query1 == false) {
    print_r($PDO->errorInfo());
}

$query2 = $PDO->query($sql2);
if ($query2 !== false) {
        $data2 = $query2->fetchAll(PDO::FETCH_ASSOC);
}
elseif ($query2 == false) {
    print_r($PDO->errorInfo());
}

$query3 = $PDO->query($sql3);
if ($query3 !== false) {
        $data3 = $query3->fetchAll(PDO::FETCH_ASSOC);
}
elseif ($query3 == false) {
    print_r($PDO->errorInfo());
}

$query4 = $PDO->query($sql4);
if ($query4 !== false) {
        $data4 = $query4->fetchAll(PDO::FETCH_ASSOC);
}
elseif ($query4 == false) {
    print_r($PDO->errorInfo());
}
// $data=$PDO->query($sql1)->fetchAll(PDO::FETCH_ASSOC);
// $data2=$PDO->query($sql2)->fetchAll(PDO::FETCH_ASSOC);
// $data3=$PDO->query($sql3)->fetchAll(PDO::FETCH_ASSOC);
if ($data1 == false) {
    # code...
    print_r($PDO->errorInfo());
}
if ($data2 == false) {
    # code...
    print_r($PDO->errorInfo());
}
if ($data3 == false) {
    # code...
    print_r($PDO->errorInfo());
}
if ($data4 == false) {
    # code...
    print_r($PDO->errorInfo());
}
$key = $key2 = $key3 = $key4 = [];  


//得到所有键名  
foreach($data1[0] as $k=>$v){  
    $key[]=$k;  
}  
foreach($data2[0] as $k=>$v){  
    $key2[]=$k;  
}
foreach($data3[0] as $k=>$v){  
    $key3[]=$k;  
}
foreach($data4[0] as $k=>$v){  
    $key4[]=$k;  
}

//引入phpExcel类  
require_once('../PHPExcel/PHPExcel.php');
require_once('../PHPExcel/PHPExcel/Writer/Excel2007.php');
$obj=new PHPExcel();        //创建对象  
$str='ABCDEFGHIJKLMNOPQRSTUVWXYZ';  
set_time_limit(0);//设置执行时间最大值
ini_set("memory_limit", "1024M");//设置php可使用缓存

$cacheMethod = \PHPExcel_CachedObjectStorageFactory::cache_in_memory_gzip;//设置单元格缓存为MemoryGZoip
if (!\PHPExcel_Settings::setCacheStorageMethod($cacheMethod)) {
    die($cacheMethod . " 缓存方法不可用" . EOL);
}
//echo date('H:i:s'), " 当前使用的缓存方法是： ", $cacheMethod, " 方式", EOL;
//设置单元格格式 背景颜色  
// $obj->getActiveSheet()->getStyle( 'A1:'.$str[$i-1].'1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);  
//$obj->getActiveSheet()->getStyle( 'A1:'.$str[$i-1].'1')->getFill()->getStartColor()->setARGB('FF808080');  

//升学
//表格第一行(标题)  
for($i=0;$i<count($key);$i++){  
    $obj->setActiveSheetIndex(0)->setCellValue($str[$i].'1',$key[$i]);  
}  
//写入数据  
foreach($data1 as $ke=>$val){  
    $ke+=2;  
    for($j=0;$j<count($val);$j++){  
        if ($key[$j] == 'xh' or $key[$j] == 'qq' or $key[$j] == 'mobile' or $key[$j] == 'sfzh')
            $obj->setActiveSheetIndex(0)->setCellValue($str[$j].$ke,' '.$val[$key[$j]]);
        else
            $obj->setActiveSheetIndex(0)->setCellValue($str[$j].$ke,$val[$key[$j]]);  
    }  
}

//出国
$obj -> createSheet();
for($i=0;$i<count($key2);$i++){  
    $obj->setActiveSheetIndex(1)->setCellValue($str[$i].'1',$key2[$i]);  
}  
foreach($data2 as $ke=>$val){  
    $ke+=2;  
    for($j=0;$j<count($val);$j++){  
        if ($key2[$j] == 'xh' or $key2[$j] == 'qq' or $key2[$j] == 'mobile' or $key2[$j] == 'sfzh')
            $obj->setActiveSheetIndex(1)->setCellValue($str[$j].$ke,' '.$val[$key2[$j]]);
        else
            $obj->setActiveSheetIndex(1)->setCellValue($str[$j].$ke,$val[$key2[$j]]);  
    }  
}

//就业
$obj -> createSheet();
for($i=0;$i<count($key3);$i++){  
    $obj->setActiveSheetIndex(2)->setCellValue($str[$i].'1',$key3[$i]);  
}
foreach($data3 as $ke=>$val){  
    $ke+=2;  
    for($j=0;$j<count($val);$j++){  
        if ($key3[$j] == 'xh' or $key3[$j] == 'qq' or $key3[$j] == 'mobile' or $key3[$j] == 'sfzh')
            $obj->setActiveSheetIndex(2)->setCellValue($str[$j].$ke,' '.$val[$key3[$j]]);
        else
            $obj->setActiveSheetIndex(2)->setCellValue($str[$j].$ke,$val[$key3[$j]]);
    }  
} 

//未就业
$obj -> createSheet();
for($i=0;$i<count($key4);$i++){  
    $obj->setActiveSheetIndex(3)->setCellValue($str[$i].'1',$key4[$i]);  
}
foreach($data4 as $ke=>$val){  
    $ke+=2;  
    for($j=0;$j<count($val);$j++){  
        if ($key4[$j] == 'xh' or $key4[$j] == 'qq' or $key4[$j] == 'mobile' or $key4[$j] == 'sfzh')
            $obj->setActiveSheetIndex(3)->setCellValue($str[$j].$ke,' '.$val[$key4[$j]]);
        else
            $obj->setActiveSheetIndex(3)->setCellValue($str[$j].$ke,$val[$key4[$j]]);
    }  
} 
//表格默认字体  字体大小  
$obj->getDefaultStyle()->getFont()->setName('等线');  
$obj->getDefaultStyle()->getFont()->setSize(11);
//也可以对某个sheet设置默认字体和字体大小
//$activeSheet->getDefaultStyle()->getFont()->setName('等线');
//$activeSheet->getDefaultStyle()->getFont()->setSize(12);
  
  
//设置每列的宽  
//$activeSheet = $obj->getActiveSheet();
//$obj->getActiveSheet()->getDefaultColumnDimension()->setWidth(14);  
//具体到某列  
//$obj->getActiveSheet()->getColumnDimension('F')->setWidth(20);    
  
$obj->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);  
  
$obj->setActiveSheetIndex(0);
$obj->getActiveSheet() -> setTitle('升学情况');
$obj->setActiveSheetIndex(1);
$obj->getActiveSheet() -> setTitle('出国情况');
$obj->setActiveSheetIndex(2);
$obj->getActiveSheet() -> setTitle('就业情况');
$obj->setActiveSheetIndex(3);
$obj->getActiveSheet() -> setTitle('未就业情况');
$obj-> setActiveSheetIndex(0);  

//生成下载文件  
$objWriter = PHPExcel_IOFactory::createWriter($obj,'Excel2007'); 
$filename = $_POST['year'] . '年毕业生信息.xlsx';  
//$file_path = realpath($filename); //绝对文件名
ob_end_clean();//清除缓存以免乱码出现
ob_start();  
//ob_get_contents();
header('Content-Type: application/vnd.ms-excel');  
header('Content-Type: application/octet-stream');  
header('Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Cache-Control: max-age=0'); 
header('Content-Disposition: attachment; filename=' . $filename);  

function SaveViaTempFile($objWriter){
    $filePath = '' . rand(0, getrandmax()) . rand(0, getrandmax()) . ".tmp";  
    $objWriter->save($filePath);  
    readfile($filePath);  
    unlink($filePath);
}
// $objWriter->save('php://output'); 
SaveViaTempFile($objWriter);
?>