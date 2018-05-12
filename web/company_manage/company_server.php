<?php 
header("Content-type: text/html;charset=utf-8");//防止乱码
//1、获取链接
$conn=@mysql_connect("localhost","root","be4nfanqrilq");
if(!$conn){
    //mysql_error()是返回mysql的上一次操作
    die("连接失败".mysql_error());
}else{
    //echo '连接成功！<br/>';
}
//2、选择对应的数据库
@mysql_select_db("InfoSystem");
//3、设置操作编码（可有可无，建议有）
mysql_query("set names utf8");//保证是按照utf8码操作的【utf8无-的，有-的是网页版的！！！！！！！】

$draw = $_GET['draw']; //第几次请求
//排序
$order_column = $_GET['order']['0']['column']; // 哪一列排序
$order_dir= $_GET['order']['0']['dir']; // ase desc 升序或者降序
//拼接排序sql
$orderSql = "";
if(isset($order_column)){
    $i = intval($order_column);
    switch($i){
        case 0;$orderSql = " order by dwmc ".$order_dir;break;
        case 1;$orderSql = " order by parent_company ".$order_dir;break;
        case 2;$orderSql = " order by location ".$order_dir;break;
        case 3;$orderSql = " order by company_category ".$order_dir;break;
        case 4;$orderSql = " order by company_industry ".$order_dir;break;
        default;$orderSql = '';
    }
}

//分页
$start = $_GET['start'];//从多少开始
$length = $_GET['length'];//数据长度
$limitSql = '';
$limitFlag = isset($_GET['start']) && $length != -1 ;
if ($limitFlag ) {
    $limitSql = " LIMIT ".intval($start).", ".intval($length);
}

//定义查询数据总记录数sql
$sumSql = "SELECT count(dwmc) as sum FROM COMPANY";
//条件过滤后记录数 必要
$recordsFiltered = 0;
//表的总记录数 必要
$recordsTotal = 0;
$recordsTotalResult = mysql_query($sumSql,$conn);
while($row=mysql_fetch_assoc($recordsTotalResult)){
    $recordsTotal = $row['sum'];
}
//搜索//定义过滤条件查询过滤后的记录数sql
$search = $_GET['search']['value'];//获取前台传过来的过滤条件
// 每列搜索
$j = 1;
$search_arr =array();
$colSearchSql='';
for($j=0;$j<5;$j++){
    $colSearchable = $_GET['columns'][$j]['searchable'];
    $colSearchVal = $_GET['columns'][$j]['search']['value'];
    if(strlen($colSearchVal)>0 && $colSearchable == 'true' ){
        switch ($j) {
        case 0: $colSearchVal = "dwmc LIKE '%".$colSearchVal."%'";
        array_push($search_arr,$colSearchVal);
        break;
        case 1: $colSearchVal = "parent_company LIKE '%".$colSearchVal."%'";
        array_push($search_arr,$colSearchVal);
        break;
        case 2: $colSearchVal = "location LIKE '%".$colSearchVal."%'";
        array_push($search_arr,$colSearchVal);
        break;
        case 3: $colSearchVal = "company_category LIKE '%".$colSearchVal."%'";
        array_push($search_arr,$colSearchVal);
        break;
        case 4: $colSearchVal = "company_industry LIKE '%".$colSearchVal."%'";
        array_push($search_arr,$colSearchVal);
        break;
        default:
        # code...
        break;
        }
    }
}
if(empty($search_arr) == false){
    $colSearchSql = " WHERE ".implode(" AND ",$search_arr);
}
// 综合搜索sql
// $zSearchSql =" where teacher_id || teacher_name || teacher_password || teacher_email || teacher_date || teacher_note LIKE '%".$search."%'";
$zSearchSql = " dwmc LIKE '%".$search."%' OR parent_company LIKE '%".$search."%' OR location LIKE '%".$search."%' OR company_category LIKE '%".$search."%' OR company_industry LIKE '%".$search."%' ";
// 拼接搜索SQL
$sumSearchSql = '';
if(strlen($colSearchSql)>0 && strlen($search)>0){
    $sumSearchSql = $colSearchSql." AND (".$zSearchSql.")";
}else if(strlen($colSearchSql)>0 && strlen($search)==0){
    $sumSearchSql = $colSearchSql;
}else if(strlen($colSearchSql)==0 && strlen($search)>0){
    $sumSearchSql = " WHERE ".$zSearchSql;
}else{
    $sumSearchSql = '';
}
if(strlen($sumSearchSql)>0){
    $recordsFilteredResult = mysql_query($sumSql.$sumSearchSql);
    while ($row = mysql_fetch_assoc($recordsFilteredResult)) {
        $recordsFiltered =  $row['sum'];
    }
}else{
    $recordsFiltered = $recordsTotal;
}
// query data
$sql='';
$totalResultSql = "SELECT * FROM COMPANY";
$infos = array();
// 拼接最终SQL
$sql=$totalResultSql.$sumSearchSql.$orderSql.$limitSql;
$dataResult = mysql_query($sql,$conn);
while ($row = mysql_fetch_assoc($dataResult)) {
    // $obj = array($row['teacher_id'], $row['teacher_name'], $row['teacher_password'], $row['teacher_email'], $row['teacher_date'], $row['teacher_note']);
    // array_push($infos,$obj);
    array_push($infos,$row);

}
// return data
echo json_encode(array(
    "draw" => $draw,
    "recordsTotal" =>$recordsTotal,  // necessary
    "recordsFiltered" =>$recordsFiltered, // necessary
    "data" =>$infos // necessary
),JSON_UNESCAPED_UNICODE);
