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
    <title>cssmoban</title>
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
    <script language="JavaScript" type="text/javascript">

        var idTmr;
    //获取当前浏览器类型
        function  getExplorer() {
            var explorer = window.navigator.userAgent ;
            //ie
            if (explorer.indexOf("MSIE") >= 0) {
                return 'ie';
            }
            //firefox
            else if (explorer.indexOf("Firefox") >= 0) {
                return 'Firefox';
            }
            //Chrome
            else if(explorer.indexOf("Chrome") >= 0){
                return 'Chrome';
            }
            //Opera
            else if(explorer.indexOf("Opera") >= 0){
                return 'Opera';
            }
            //Safari
            else if(explorer.indexOf("Safari") >= 0){
                return 'Safari';
            }
        }

    //获取到类型需要判断当前浏览器需要调用的方法，目前项目中火狐，谷歌，360没有问题
        //win10自带的IE无法导出
        function exportExcel(tableid) {
            if(getExplorer()=='ie')
            {
                var curTbl = document.getElementById(tableid);
                var oXL = new ActiveXObject("Excel.Application");
                var oWB = oXL.Workbooks.Add();
                var xlsheet = oWB.Worksheets(1);
                var sel = document.body.createTextRange();
                sel.moveToElementText(curTbl);
                sel.select();
                sel.execCommand("Copy");
                xlsheet.Paste();
                oXL.Visible = true;

                try {
                    var fname = oXL.Application.GetSaveAsFilename("Excel.xls", "Excel Spreadsheets (*.xls), *.xls");
                } catch (e) {
                    print("Nested catch caught " + e);
                } finally {
                    oWB.SaveAs(fname);
                    oWB.Close(savechanges = false);
                    oXL.Quit();
                    oXL = null;
                    idTmr = window.setInterval("Cleanup();", 1);
                }

            }
            else
            {
                tableToExcel(tableid)
            }
        }
        function Cleanup() {
            window.clearInterval(idTmr);
            CollectGarbage();
        }

    //判断浏览器后调用的方法，把table的id传入即可
        var tableToExcel = (function() {
            var uri = 'data:application/vnd.ms-excel;base64,',
                    template = '<html><head><meta charset="UTF-8"></head><body><table>{table}</table></body></html>',
                    base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) },
                    format = function(s, c) {
                        return s.replace(/{(\w+)}/g,
                                function(m, p) { return c[p]; }) }
            return function(table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
                window.location.href = uri + base64(format(template, ctx))
            }
        })()

    </script>
</head>
<body>

    <div id="wrapper">

    <?php require 'nav.php'; ?>
    <?php require 'conn.php'; ?>
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                        Dashboard <small>Welcome <?php echo $_SESSION['name'] ; ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>

            <div id="page-inner">
                <div >

                    <button type="button" onclick="exportExcel('tableExcel')">导出Excel</button>
                </div>

                <form method="POST" action="export_active.php">
                    <table>
                        <td>请输入年份:</td><td><input type="text" name="year"></td><br />
                        <td></td><td><input type="submit" value="导出Excel"></td>
                    </table>
                </form>

                <!-- 升学 -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                升学情况
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-1">
                                        <?php
                                            $sql="SELECT * FROM STUDENT, NATION_UNIVERSITY where student.dwmc = national_university.dwmc and year = $year";
                                            //$sql = "select * from employee";
                                            //写sql语句
                                            $data=$PDO->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                                            $r = $db->query($sql);
                                            $key = [];
                                            //得到所有键名
                                            foreach($data[0] as $k=>$v){
                                                $key[]=$k;
                                            }

                                            $rownum = 0;
                                            echo "<thead>";
                                            echo "<tr>";
                                            for($i = 0; $key[$i]; $i++)
                                            {
                                              echo "<th>{$key[$i]}</th>";
                                              $rownum = $i;
                                            }
                                            echo "</tr>";
                                            echo "</thead>";
                                            //执行sql语句返回给r
                                            echo "<tbody>";
                                              if($r)//条件
                                              {
                                                while ($attr = $r->fetch_row())
                                                {
                                                  $j = 0;
                                                  echo "<tr>";
                                                  while($j <= $rownum)//$attr[$j]
                                                  {
                                                    echo "<td>";
                                                    if($attr[$j])
                                                      echo "{$attr[$j]}";
                                                    else
                                                      echo "NULL";
                                                    echo "</td>";
                                                    $j++;
                                                  }
                                                  echo "</tr>";
                                                }
                                              }
                                            echo "</body>";
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 升学 end -->
                <!-- 出国 -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                出国情况
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-2">
                                        <?php
                                            $sql="SELECT * FROM student, foreign_university, university_rank where student.dwmc = foreign_university.dwmc and foreign_university.dwmc = university_rank.dwmc and university_rank.year = $year and student.year = $year";
                                            //$sql = "select * from employee";
                                            //写sql语句
                                            $data=$PDO->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                                            $r = $db->query($sql);
                                            $key = [];
                                            //得到所有键名
                                            foreach($data[0] as $k=>$v){
                                                $key[]=$k;
                                            }

                                            $rownum = 0;
                                            echo "<thead>";
                                            echo "<tr>";
                                            for($i = 0; $key[$i]; $i++)
                                            {
                                              echo "<th>{$key[$i]}</th>";
                                              $rownum = $i;
                                            }
                                            echo "</tr>";
                                            echo "</thead>";
                                            //执行sql语句返回给r
                                            echo "<tbody>";
                                              if($r)//条件
                                              {
                                                while ($attr = $r->fetch_row())
                                                {
                                                  $j = 0;
                                                  echo "<tr>";
                                                  while($j <= $rownum)//$attr[$j]
                                                  {
                                                    echo "<td>";
                                                    if($attr[$j])
                                                      echo "{$attr[$j]}";
                                                    else
                                                      echo "NULL";
                                                    echo "</td>";
                                                    $j++;
                                                  }
                                                  echo "</tr>";
                                                }
                                              }
                                            echo "</body>";
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 出国 end -->
                <!-- 就业 -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                就业情况
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-3">
                                        <?php
                                            $sql="SELECT * FROM student, company, company_rank where student.dwmc = company.dwmc and company.dwmc = company_rank.dwmc and company_rank.year = $year and student.year = $year";
                                            //$sql = "select * from employee";
                                            //写sql语句
                                            $data=$PDO->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                                            $r = $db->query($sql);
                                            $key = [];
                                            //得到所有键名
                                            foreach($data[0] as $k=>$v){
                                                $key[]=$k;
                                            }

                                            $rownum = 0;
                                            echo "<thead>";
                                            echo "<tr>";
                                            for($i = 0; $key[$i]; $i++)
                                            {
                                              echo "<th>{$key[$i]}</th>";
                                              $rownum = $i;
                                            }
                                            echo "</tr>";
                                            echo "</thead>";
                                            //执行sql语句返回给r
                                            echo "<tbody>";
                                              if($r)//条件
                                              {
                                                while ($attr = $r->fetch_row())
                                                {
                                                  $j = 0;
                                                  echo "<tr>";
                                                  while($j <= $rownum)//$attr[$j]
                                                  {
                                                    echo "<td>";
                                                    if($attr[$j])
                                                      echo "{$attr[$j]}";
                                                    else
                                                      echo "NULL";
                                                    echo "</td>";
                                                    $j++;
                                                  }
                                                  echo "</tr>";
                                                }
                                              }
                                            echo "</body>";
                                        ?>
                                    </table>
                                </div>
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

        <!-- DATA TABLE SCRIPTS -->
        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
                $(document).ready(function () {
                    $('#dataTables-1').dataTable();
                    $('#dataTables-2').dataTable();
                    $('#dataTables-3').dataTable();
                });
        </script>

        <!-- Custom Js -->
        <script src="assets/js/custom-scripts.js"></script>

            <script>

            </script>

</body>

</html>
</html>
