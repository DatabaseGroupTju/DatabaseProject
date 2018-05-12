<?php
// 如果用户没有登陆 则跳转到登录界面
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
    <!-- excel related -->
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>

</head>

<body>
    <div id="wrapper">
        <!-- 插入导航栏信息 -->
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
                    <li class="active">公司信息管理</li>
                </ol>

            </div>

            <div id="page-inner">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:100%">
                        <tfoot>
                            <tr>
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
            <!-- /. PAGE INNER  -->

        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- 修改公司信息的模态框 -->
    <form method="post" action="" class="form-horizontal" role="form" id="form_data" onsubmit="return check_form()" style="margin: 20px;">
        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            修改公司信息
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">dwmc</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="dwmc" name="dwmc" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">parent_company</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="parent_company" value="" id="parent_company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">location</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="location" value="" id="location">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">company_category</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="company_category" value="" id="company_category">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">company_industry</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="company_industry" value="" id="company_industry">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                        </button>
                        <button type="submit" class="btn btn-primary">
                            提交
                        </button>
                        <!-- <span id="tip"> </span> -->
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal -->
        </div>
    </form>
    <!-- JS Scripts-->
    <script>
        // 提交模态框表单信息验证
        function check_form() {
            var dwmc = $.trim($('#dwmc').val());
            if (!dwmc) {
                alert('单位名称不能为空！');
                return false;
            }

            // 异步提交数据到company_manage/company_action2.php页面
            $.ajax({

                type: "get",
                url: "company_manage/company_action2.php",
                data: $('#form_data').serialize(),
                dataType: "text",
                beforeSend: function () {
                    return true;
                },
                success: function (data) {
                    if (data) {
                        oTable.ajax.reload();
                        $("#addUserModal").modal('hide');
                    } else {
                        alert('操作失败');
                    }
                },
                error: function () {
                    alert('请求出错');
                },
                complete: function () {
                    $('#acting_tips').hide();
                }
            });
            return false;
        }
        $(function () {
            // oTable 全局变量
            oTable = initTable();

            // Setup - add a text input to each footer cell
            $('#example tfoot th').each(function (index) {
                //让某一列搜索框不可用
                if (index == 5) {
                    var title = $('#example thead th').eq($(this).index()).text();
                    $(this).html('<input type="text" placeholder="Search ' + title +
                        '" class="form-control" readonly="readonly"/>');
                    return;
                }
                var title = $('#example thead th').eq($(this).index()).text();
                $(this).html('<input type="text" placeholder="Search ' + title +
                    '" class="form-control"/>');
            });

            // Apply the search
            oTable.columns().eq(0).each(function (colIdx) {
                $('input', oTable.column(colIdx).footer()).on('keyup change', function () {
                    oTable
                        .column(colIdx)
                        .search(this.value)
                        .draw();
                });
            });

        }); //jquery end
    </script>
    <script>
        function initTable() {
            var table = $("#example").DataTable({
                "paging": true,
                "pagingType": "full_numbers",
                "lengthMenu": [5, 10, 25, 50],
                "processing": true,
                "searching": true, //是否开启搜索
                "serverSide": true, //开启服务器获取数据
                "scrollCollapse": "true",
                "order": [
                    [0, "desc"]
                ], //默认排序
                "ajax": { // 获取数据
                    "url": "company_manage/company_server.php",
                    "dataType": "json" //返回来的数据形式
                },
                dom: 'Bfrtlip',
                "buttons": [{
                    'extend': 'excel',
                    'text': '导出当前页', //定义导出excel按钮的文字  
                    'exportOptions': {
                        'modifier': {
                            'page': 'current'
                        },
                        'columns': '0,1,2,3,4' //导出的列，默认全部
                    }
                }],
                "columns": [ //定义列数据来源
                    {
                        'title': "dwmc",
                        'data': "dwmc"
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
                        'title': "company_category",
                        'data': "company_category"
                    },
                    {
                        'title': "company_industry",
                        'data': "company_industry"
                    },
                    {
                        'title': "action",
                        'data': null,
                        'class': "align-center"
                    } // 自定义列
                ],
                "columnDefs": [ //自定义列
                    {
                        "targets": -1, //改写哪一列
                        "data": "dwmc",
                        //为最后一列添加为按钮组
                        "render": function (data, type, row) {
                            var html =
                                "<button class='btn btn-info' data-toggle='modal' data-target='#addUserModal' onclick='edit(" +
                                "\"" + row.dwmc + "\"" +
                                ")'>修改</button>" +
                                "   <button name='btn-del' class='btn btn-danger' onclick='del(" + "\"" +
                                row.dwmc + "\"" +
                                ")'>删除</button>";
                            return html;
                        }
                    },
                    {
                        "targets": -1,
                        "orderable": false //禁止排序
                    },
                    {
                        "targets": -1,
                        "searchable": false //禁止搜索
                    }
                ],
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
                },
                "createdRow": function (row, data, index) { //行回调函数
                }

            }); //table end

            return table;
        } //inintTable END

        // 删除
        function del(dwmc) {
            // 弹出确认框
            if (confirm('你确定要删除' + dwmc + ' 的记录?')) {
                //ajax后台访问php删除相关信息
                $.ajax({
                    type: "get",
                    url: "company_manage/company_del.php",
                    data: {
                        'dwmc': dwmc
                    },
                    dataType: "json",
                    success: function (msg) {
                        // var msg = eval(msg);
                        if (msg.status == true) {
                            // 刷新table
                            oTable.ajax.reload();

                        } else {
                            alert("删除失败");
                        }
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            } else {
                // 取消
                return;
            }

        }

        // 修改公司信息
        function edit(dwmc) {
            if (!dwmc) {
                alert('Error！');
                return false;
            }

            $.ajax({
                type: "get",
                url: "company_manage/company_action.php",
                data: {
                    'dwmc': dwmc
                },
                dataType: "json",
                beforeSend: function () {
                    return true;
                },
                success: function (data) {
                    $("#dwmc").val(data[0]['dwmc']);
                    $("#parent_company").val(data[0]['parent_company']);
                    $("#location").val(data[0]['location']);
                    $("#company_category").val(data[0]['company_category']);
                    $("#company_industry").val(data[0]['company_industry']);
                    // 将input元素设置为readonly
                    $('#dwmc').attr("readonly", "readonly")
                },
                error: function () {
                    alert('请求出错');
                },
                complete: function () {}
            });

            return false;
        }
    </script>
</body>

</html>