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
        <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet">

        <!-- Custom Styles-->
        <link href="assets/css/custom-styles.css" rel="stylesheet" />
        <!-- Custom Js -->
        <script src="assets/js/custom-scripts.js"></script>
        <!-- Excel related -->
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
                            <!-- 获取管理员用户名 -->
                            <?php echo $_SESSION['name'] ; ?>
                        </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">主页</a>
                        </li>
                        <li class="active">管理员信息管理</li>
                    </ol>
                </div>

                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    注册新管理员
                                </div>
                                <div class="panel-body">
                                    <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                                        <div class="addrow">
                                            <form id="signupForm" name="signupForm">
                                                <label>用户名:</label>
                                                <input type="text" id="add_name" class="form-control">
                                                <label>密码:</label>
                                                <input type="password" id="add_pwd" class="form-control">
                                                <label>确认密码:</label>
                                                <input type="password" id="confirm_add_pwd" class="form-control">
                                                <button type="submit" onclick="return add()" class="btn btn-success btn-primary btn-block">增加</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    </hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    管理员信息管理
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered table-hover responsive" cellspacing="0" style="width:100%">
                                            <tfoot>
                                                <tr>
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
                    </div>
                </div>
            </div>
            <!-- /. WRAPPER  -->
            <!-- JS Scripts-->
            <!-- jQuery Js -->
            <!-- 模态框组件 -->
            <form method="post" action="" class="form-horizontal" role="form" id="form_data" onsubmit="return check_form()" style="margin: 20px;">
                <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h3 class="modal-title" id="myModalLabel">
                                    修改管理员信息
                                </h3>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">uid</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="uid" name="uid" value="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="username" value="" id="username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="password" value="" id="password">
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
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal -->
                </div>
            </form>

            <script>
                // 检查提交表单是否合法
                function check_form() {
                    var password = $.trim($('#password').val());
                    var username = $.trim($('#username').val());
                    if (!password || !username) {
                        alert('用户名和密码不能为空！');
                        return false;
                    }

                    // 异步提交数据到user_manage/user_edit2.php页面
                    $.ajax({
                        url: "user_manage/user_edit2.php",
                        data: $('#form_data').serialize(),
                        type: "post",
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
                        if (index == 1) {
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
                        "order": [
                            [0, "desc"]
                        ], //默认排序
                        "ajax": { // 获取数据
                            "url": "user_manage/user_server.php",
                            "dataType": "json" //返回来的数据形式
                        },
                        "columns": [ //定义列数据来源
                            {
                                'title': "uid",
                                'data': "uid"
                            },
                            {
                                'title': "username",
                                'data': "username"
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
                                "data": "uid",
                                "render": function (data, type, row) {
                                    // 为最后一列添加修改删除按钮
                                    var html =
                                        "<button class='btn btn-info' data-toggle='modal' data-target='#addUserModal' onclick='edit(" +
                                        row.uid +
                                        ")'>修改</button>" +
                                        "   <button name='btn-del' class='btn btn-danger' onclick='del(" +
                                        row.uid +
                                        ")'>删除</button>";
                                    return html;
                                }
                            },
                            {
                                "targets": 0,
                                "visible": false //隐藏列
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

                // 删除用户信息ajax
                function del(uid) {
                    if (confirm('你确定要删除' + uid + ' 的记录?')) {
                        // 确定
                        $.ajax({
                            type: "post",
                            url: "user_manage/user_delete.php",
                            data: {
                                'uid': uid
                            },
                            dataType: "json",
                            success: function (msg) {
                                if (msg.status == true) {
                                    // alert("删除 uid= " + msg.uid + "成功");
                                    // 刷新table
                                    oTable.ajax.reload(); //1.10之后

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

                // 修改用户信息ajax
                function edit(uid) {
                    if (!uid) {
                        alert('Error！');
                        return false;
                    }

                    $.ajax({
                        url: "user_manage/user_edit.php",
                        data: {
                            "uid": uid
                        },
                        type: "post",
                        beforeSend: function () {
                            return true;
                        },
                        success: function (data) {
                            if (data) {
                                obj = JSON.parse(data);

                                $("#uid").val(obj[0]['uid']);
                                $("#username").val(obj[0]['username']);
                                $("#password").val(obj[0]['password']);
                                // 将input元素设置为readonly
                                $('#uid').attr("readonly", "readonly")
                            } else {
                                alert('操作失败');
                            }
                        },
                        error: function () {
                            alert('请求出错');
                        },
                        complete: function () {}
                    });

                    return false;
                }
                //添加管理员h函数
                function add() {
                    //检查两次密码是否一致
                    var password = $.trim($('#add_pwd').val());
                    var repassword = $.trim($('#confirm_add_pwd').val());
                    if (password != repassword) {
                        alert("您输入的新密码与确认密码确认不一致");
                        return false;
                    }
                    var name = $.trim($('#add_pwd').val());
                    if (name == "" || password == "" || repassword == "") {
                        alert("输入信息不能为空");
                        return false;
                    } else {
                        var jsonData = {
                            // 向后台传入管理员密码和账户名
                            "name": $("#add_name").val(),
                            "pwd": $("#add_pwd").val(),
                        };

                        $.ajax({
                            type: 'post',
                            url: 'user_manage/user_add.php',
                            data: jsonData,
                            dataType: "json",
                            success: function (msg) {
                                if (msg.status == true) {
                                    oTable.ajax.reload();
                                } else {
                                    // 当管理员存在时 msg的status为false
                                    alert("用户名已经存在");
                                }
                            },
                            error: function (error) {
                                console.log(error);
                            }
                        });
                    }
                }
            </script>
    </body>

    </html>

    </html>