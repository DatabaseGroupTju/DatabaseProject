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
    <link href="//cdn.bootcss.com/datatables/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
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
                    <li class="active">导出</li>
                </ol>
            </div>

            <div id="page-inner">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>数据导出</h3>
                        </div>
                        <div class="panel-body">
                            <!-- <form method="POST" action="export_actions/export_active.php" id="post_year_form"> -->
                            <form method="POST" id="post_year_form">
                                <div class="input-group" style="width:400px">
                                    <span class="input-group-addon">待导出年份</span>
                                    <input type="number" class="form-control" id="year" name="year">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default" id="export_button" style="background-color:#87CEFA;" >导出Excel(为安全原因不可用)</button>
                                    </span>        
                                </div>
                                <div id="innertext"></div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- 升学 -->
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>升学情况</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTables1" class="table table-striped table-bordered table-hover" cellspacing="0"  style="width:100%">
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 升学 end -->
                <!-- 出国 -->
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>出国情况</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTables2" class="table table-striped table-bordered table-hover" cellspacing="0" style="width:100%">
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 出国 end -->
                <!-- 就业 -->
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>就业情况</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTables3" class="table table-striped table-bordered table-hover" cellspacing="0" style="width:100%">
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 就业 end -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- DATA TABLE SCRIPTS -->
<!--     <script>
        window.onload=function(){
            // if (!empty(document.getElementsById('year').value)) {
                document.getElementById("export_button").onclick=fn1;
                function fn1(){
                    //document.getElementById("innertext").focus();
                    document.getElementById("innertext").innerHTML="please wait for a moment......";
                    // document.getElementsById("post_year_form").submit();
                }
            //}
        }
    </script> -->
    <script>
            $(function () {
                // Setup - add a text input to each footer cell for each table
                $('#dataTables1 tfoot th').each(function () {
                    //隐藏某一列input
                    var title = $('#dataTables1 thead th').eq($(this).index()).text();
                    $(this).html('<input type="text" placeholder="Search '+title+'" class="form-control"/>');
                });
                $('#dataTables2 tfoot th').each(function () {
                    //隐藏某一列input
                    var title = $('#dataTables2 thead th').eq($(this).index()).text();
                    $(this).html('<input type="text" placeholder="Search '+title+'" class="form-control"/>');
                });
                $('#dataTables3 tfoot th').each(function () {
                    //隐藏某一列input
                    var title = $('#dataTables3 thead th').eq($(this).index()).text();
                    $(this).html('<input type="text" placeholder="Search '+title+'" class="form-control"/>');
                });
                var table1 = $("#dataTables1").DataTable({//var Table1 = 
                    // "bAutoWidth": false,
                    "paging": true,
                    "pagingType": "full_numbers",
                    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, '全部']],
                    "processing": true,
                    "searching": true, //是否开启搜索
                    "serverSide": true, //开启服务器获取数据
                    "order": [
                        [1, "desc"]
                    ], //默认排序
                    "ajax": { // 获取数据
                        "url": "export_actions/export_t1.php",
                        "dataType": "json" //返回来的数据形式
                    },
                    dom : 'Bfrtlip',                 
                    "buttons": [
                        {
                            'extend': 'excel',
                            'text': '导出当前页', //定义导出excel按钮的文字  
                            'exportOptions': {
                                'modifier': {
                                    'page': 'current'
                                },
                                'columns': '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18' //导出的列，默认全部
                            }
                        }
                    ],
                    "columns": [ //定义列数据来源
                        {
                            'title': "year",
                            'data': "year"
                            //"orderable":false  //禁止排序
                        },
                        {
                            'title': "xh",
                            'data': "xh"
                        },
                        {
                            'title': "xm",
                            'data': "xm"
                            // 'width': '100px'
                        },
                        {
                            'title': "xb",
                            'data': "xb"
                        },
                        {
                            'title': "mz",
                            'data': "mz"
                        },
                        {
                            'title': "cc",
                            'data': "cc"
                        },
                        {
                            'title': "zy",
                            'data': "zy"
                        },
                        {
                            'title': "pyfs",
                            'data': "pyfs"
                        },
                        {
                            'title': "syszd",
                            'data': "syszd"
                        },
                        {
                            'title': "knslb",
                            'data': "knslb"
                        },
                        {
                            'title': "fy",
                            'data': "fy"
                        },
                        {
                            'title': "qq",
                            'data': "qq"
                        },
                        {
                            'title': "email",
                            'data': "email"
                        },
                        {
                            'title': "mobile",
                            'data': "mobile"
                        },
                        {
                            'title': "byqx",
                            'data': "byqx"
                        },
                        {
                            'title': "dwmc",
                            'data': "dwmc"
                        },
                        {
                            'title': "sfzh",
                            'data': "sfzh"
                        },
                        {
                            'title': "institution_category",
                            'data': "institution_category"
                        },
                        {
                            'title': "location",
                            'data': "location"
                        }
                    ],
                    // "columnDefs": [{   
                    //     "targets": 10,
                    //     "width": "200px"
                    // }],
                    "language": { // 定义语言
                        "sProcessing": "加载中...",
                        "sLengthMenu": "每页显示 _MENU_ 条记录",
                        "sZeroRecords": "没有匹配的结果",
                        "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                        "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                        "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                        "sInfoPostFix": "",
                        "sSearch": "搜索:",
                        "sUrl": "",
                        "sEmptyTable": "表中数据为空",
                        "sLoadingRecords": "载入中...",
                        "sInfoThousands": ",",
                        "oPaginate": {
                            "sFirst": "首页",
                            "sPrevious": "上一页",
                            "sNext": "下一页",
                            "sLast": "末页"
                        },
                        "oAria": {
                            "sSortAscending": ": 以升序排列此列",
                            "sSortDescending": ": 以降序排列此列"
                        }
                    }
                });
                var table2 = $('#dataTables2').DataTable({//var Table2 = 
                    // "autoWidth": false,
                    "paging": true,
                    "pagingType": "full_numbers",
                    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "ALL"]],
                    "processing": true,
                    "searching": true, //是否开启搜索
                    "serverSide": true, //开启服务器获取数据
                    "order": [
                        [1, "desc"]
                    ], //默认排序
                    "ajax": { // 获取数据
                        "url": "export_actions/export_t2.php",
                        "dataType": "json" //返回来的数据形式
                    },
                    dom : 'Bfrtlip',                 
                    "buttons": [
                        {
                            'extend': 'excel',
                            'text': '导出当前页', //定义导出excel按钮的文字  
                            'exportOptions': {
                                'modifier': {
                                    'page': 'current'
                                },
                                'columns': '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18' //导出的列，默认全部
                            }
                        }
                    ],
                    "columns": [ //定义列数据来源
                        {
                            'title': "year",
                            'data': "year"
                            //"orderable":false  //禁止排序

                        },
                        {
                            'title': "xh",
                            'data': "xh"
                        },
                        {
                            'title': "xm",
                            'data': "xm"
                        },
                        {
                            'title': "xb",
                            'data': "xb"
                        },
                        {
                            'title': "mz",
                            'data': "mz"
                        },
                        {
                            'title': "cc",
                            'data': "cc"
                        },
                        {
                            'title': "zy",
                            'data': "zy"
                        },
                        {
                            'title': "pyfs",
                            'data': "pyfs"
                        },
                        {
                            'title': "syszd",
                            'data': "syszd"
                        },
                        {
                            'title': "knslb",
                            'data': "knslb"
                        },
                        {
                            'title': "fy",
                            'data': "fy"
                        },
                        {
                            'title': "qq",
                            'data': "qq"
                        },
                        {
                            'title': "email",
                            'data': "email"
                        },
                        {
                            'title': "mobile",
                            'data': "mobile"
                        },
                        {
                            'title': "byqx",
                            'data': "byqx"
                        },
                        {
                            'title': "dwmc",
                            'data': "dwmc"
                        },
                        {
                            'title': "sfzh",
                            'data': "sfzh"
                        },
                        {
                            'title': "country",
                            'data': "country"
                        },
                        {
                            'title': "QS_rank",
                            'data': "QS_rank"
                        }
                    ],
                    // "columnDefs": [ {   
                    //     "targets": 10,
                    //     "width": "200px"
                        
                    // } ],
                    "language": { // 定义语言
                        "sProcessing": "加载中...",
                        "sLengthMenu": "每页显示 _MENU_ 条记录",
                        "sZeroRecords": "没有匹配的结果",
                        "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                        "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                        "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                        "sInfoPostFix": "",
                        "sSearch": "搜索:",
                        "sUrl": "",
                        "sEmptyTable": "表中数据为空",
                        "sLoadingRecords": "载入中...",
                        "sInfoThousands": ",",
                        "oPaginate": {
                            "sFirst": "首页",
                            "sPrevious": "上一页",
                            "sNext": "下一页",
                            "sLast": "末页"
                        },
                        "oAria": {
                            "sSortAscending": ": 以升序排列此列",
                            "sSortDescending": ": 以降序排列此列"
                        }
                    }
                });
                var table3 = $('#dataTables3').DataTable({//var Table3 = 
                    // "autoWidth": false,
                    "paging": true,
                    "pagingType": "full_numbers",
                    "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "ALL"]],
                    "processing": true,
                    "searching": true, //是否开启搜索
                    "serverSide": true, //开启服务器获取数据
                    "order": [
                        [1, "desc"]
                    ], //默认排序
                    "ajax": { // 获取数据
                        "url": "export_actions/export_t3.php",
                        "dataType": "json" //返回来的数据形式
                    },
                    dom : 'Bfrtlip',                 
                    "buttons": [
                        {
                            'extend': 'excel',
                            'text': '导出当前页', //定义导出excel按钮的文字  
                            'exportOptions': {
                                'modifier': {
                                    'page': 'current'
                                },
                                'columns': '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21' //导出的列，默认全部
                            }
                        }
                    ],
                    "columns": [ //定义列数据来源
                        {
                            'title': "year",
                            'data': "year"
                            //"orderable":false  //禁止排序
                        },
                        {
                            'title': "xh",
                            'data': "xh"
                        },
                        {
                            'title': "xm",
                            'data': "xm"
                        },
                        {
                            'title': "xb",
                            'data': "xb"
                        },
                        {
                            'title': "mz",
                            'data': "mz"
                        },
                        {
                            'title': "cc",
                            'data': "cc"
                        },
                        {
                            'title': "zy",
                            'data': "zy"
                        },
                        {
                            'title': "pyfs",
                            'data': "pyfs"
                        },
                        {
                            'title': "syszd",
                            'data': "syszd"
                        },
                        {
                            'title': "knslb",
                            'data': "knslb"
                        },
                        {
                            'title': "fy",
                            'data': "fy"
                        },
                        {
                            'title': "qq",
                            'data': "qq"
                        },
                        {
                            'title': "email",
                            'data': "email"
                        },
                        {
                            'title': "mobile",
                            'data': "mobile"
                        },
                        {
                            'title': "byqx",
                            'data': "byqx"
                        },
                        {
                            'title': "dwmc",
                            'data': "dwmc"
                            // 'width': '100px'
                        },
                        {
                            'title': "sfzh",
                            'data': "sfzh"
                        },
                        {
                            'title': "company_category",
                            'data': "company_category"
                        },
                        {
                            'title': "company_industry",
                            'data': "company_industry"
                        },
                        {
                            'title': "parent_company",
                            'data': "parent_company"
                        },
                        {
                            'title': "location",
                            'data': "location"
                        },
                        {
                            'title': "rank_500",
                            'data': "rank_500"
                        }
                    ],
                    // "columnDefs": [{   
                    //     "targets": 10,
                    //     "width": "200px"
                    // }],
                    "language": { // 定义语言
                        "sProcessing": "加载中...",
                        "sLengthMenu": "每页显示 _MENU_ 条记录",
                        "sZeroRecords": "没有匹配的结果",
                        "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                        "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                        "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                        "sInfoPostFix": "",
                        "sSearch": "搜索:",
                        "sUrl": "",
                        "sEmptyTable": "表中数据为空",
                        "sLoadingRecords": "载入中...",
                        "sInfoThousands": ",",
                        "oPaginate": {
                            "sFirst": "首页",
                            "sPrevious": "上一页",
                            "sNext": "下一页",
                            "sLast": "末页"
                        },
                        "oAria": {
                            "sSortAscending": ": 以升序排列此列",
                            "sSortDescending": ": 以降序排列此列"
                        }
                    }
                });
                // Apply the search
                table1.columns().eq(0).each(function (colIdx) {
                    $('input', table1.column(colIdx).footer()).on('keyup change', function () {
                        table1
                            .column(colIdx)
                            .search(this.value)
                            .draw();
                    });
                });
                table2.columns().eq(0).each(function (colIdx) {
                    $('input', table2.column(colIdx).footer()).on('keyup change', function () {
                        table2
                            .column(colIdx)
                            .search(this.value)
                            .draw();
                    });
                });
                table3.columns().eq(0).each(function (colIdx) {
                    $('input', table3.column(colIdx).footer()).on('keyup change', function () {
                        table3
                            .column(colIdx)
                            .search(this.value)
                            .draw();
                    });
                });
            });

    </script>

</body>

</html>

</html>