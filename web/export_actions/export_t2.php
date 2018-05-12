<?php
    header("Content-type: text/html;charset=utf-8");//防止乱码
    //获取连接
    $conn=@mysql_connect("localhost","root","be4nfanqrilq");
    if(!$conn){
        //mysql_error()是返回mysql的上一次操作
        die("连接失败".mysql_error());
    }else{
            //echo '连接成功！<br/>';
    }
    //选择对应的Scheme
    @mysql_select_db("InfoSystem");
    //设置编码方式
    mysql_query("set names utf8");

    //排序
    $order_column = $_REQUEST['order']['0']['column'];      //哪一列排序，从0开始
    $order_dir = $_REQUEST['order']['0']['dir'];            //ase desc 升序或者降序

    //拼接排序sql
    $orderSql2 = "";
    if(isset($order_column)){
        $i = intval($order_column);
        switch($i){
            case 0;$orderSql2 = " order by year ".$order_dir;break;
            case 1;$orderSql2 = " order by xh ".$order_dir;break;
            case 2;$orderSql2 = " order by xm ".$order_dir;break;
            case 3;$orderSql2 = " order by xb ".$order_dir;break;
            case 4;$orderSql2 = " order by mz ".$order_dir;break;
            case 5;$orderSql2 = " order by cc ".$order_dir;break;
            case 6;$orderSql2 = " order by zy ".$order_dir;break;
            case 7;$orderSql2 = " order by pyfs ".$order_dir;break;
            case 8;$orderSql2 = " order by syszd ".$order_dir;break;
            case 9;$orderSql2 = " order by knslb ".$order_dir;break;
            case 10;$orderSql2 = " order by fy ".$order_dir;break;
            case 11;$orderSql2 = " order by qq ".$order_dir;break;
            case 12;$orderSql2 = " order by email ".$order_dir;break;
            case 13;$orderSql2 = " order by mobile ".$order_dir;break;
            case 14;$orderSql2 = " order by byqx ".$order_dir;break;
            case 15;$orderSql2 = " order by dwmc ".$order_dir;break;
            case 16;$orderSql2 = " order by sfzh ".$order_dir;break;
            case 17;$orderSql2 = " order by country ".$order_dir;break;
            case 18;$orderSql2 = " order by QS_rank ".$order_dir;break;
            default;$orderSql2 = '';
        }
    }

    //分页
    $start = $_GET['start'];        //从多少开始
    $length = $_GET['length'];      //数据长度
    $limitSql = '';
    $limitFlag = isset($_GET['start']) && $length != -1 ;
    if ($limitFlag ) {
        $limitSql = " LIMIT ".intval($start).", ".intval($length);
    }

    //定义查询数据总记录数sql
    $sumSql = "SELECT count(sfzh) as sum FROM foreignUniversityView";
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
    for($j=0;$j<19;$j++){
        $colSearchable = $_GET['columns'][$j]['searchable'];
        $colSearchVal = $_GET['columns'][$j]['search']['value'];
        if(strlen($colSearchVal)>0 && $colSearchable == 'true' ){
            switch ($j) {
                case 0: $colSearchVal = "year LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 1: $colSearchVal = "xh LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 2: $colSearchVal = "xm LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 3: $colSearchVal = "xb LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 4: $colSearchVal = "mz LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 5: $colSearchVal = "cc LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 6: $colSearchVal = "zy LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 7: $colSearchVal = "pyfs LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 8: $colSearchVal = "syszd LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 9: $colSearchVal = "knslb LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 10: $colSearchVal = "fy LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 11: $colSearchVal = "qq LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 12: $colSearchVal = "email LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 13: $colSearchVal = "mobile LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 14: $colSearchVal = "byqx LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 15: $colSearchVal = "dwmc LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 16: $colSearchVal = "sfzh LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 17: $colSearchVal = "country LIKE '%".$colSearchVal."%'";
                        array_push($search_arr,$colSearchVal);
                        break;
                case 18: $colSearchVal = "QS_rank LIKE '%".$colSearchVal."%'";
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



    $search = $_GET['search']['value'];//获取前台传过来的过滤条件
    // 综合搜索sql
    $zSearchSql = " year LIKE '%".$search."%' OR xh LIKE '%".$search."%' OR xm LIKE '%".$search."%' OR xb LIKE '%".$search."%' OR mz LIKE '%".$search."%' OR cc LIKE '%".$search."%' OR zy LIKE '%".$search."%' OR pyfs LIKE '%".$search."%' OR syszd LIKE '%".$search."%' OR knslb LIKE '%".$search."%' OR fy LIKE '%".$search."%' OR qq LIKE '%".$search."%' OR email LIKE '%".$search."%' OR mobile LIKE '%".$search."%' OR byqx LIKE '%".$search."%' OR dwmc LIKE '%".$search."%' OR sfzh LIKE '%".$search."%' OR country LIKE '%".$search."%' OR QS_rank LIKE '%".$search."%'";

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
    $sql2='';
    $totalResultSql = "SELECT * FROM foreignUniversityView";
    $infos = array();
    // 拼接最终SQL 
    $sql2=$totalResultSql.$sumSearchSql.$orderSql2.$limitSql;
    $dataResult2 = mysql_query($sql2,$conn);
    while ($row = mysql_fetch_assoc($dataResult2)) {
        // $obj = array($row['teacher_id'], $row['teacher_name'], $row['teacher_password'], $row['teacher_email'], $row['teacher_date'], $row['teacher_note']);
        // array_push($infos,$obj);
        array_push($infos,$row);

    }
    // return data
    echo json_encode(array(
        "draw" => !empty($_GET['draw']) ? $_GET['draw'] : 1,
        "recordsTotal" =>$recordsTotal,  // necessary
        "recordsFiltered" =>$recordsFiltered, // necessary
        "data" =>$infos // necessary
        ),JSON_UNESCAPED_UNICODE);