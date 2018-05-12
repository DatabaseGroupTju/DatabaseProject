<?php
// 如果用户没有登陆 则跳转到登录界面
session_start();
if(!isset($_SESSION['name'])){
header("Location:login.php");
exit();
}
header("Location:pic-analysis.php");
//暂时没有是用php探针，直接跳转到图表分析
date_default_timezone_set('Asia/Shanghai') && error_reporting(0);
function _GET($n) { return isset($_GET[$n]) ? $_GET[$n] : NULL; }
function _SERVER($n) { return isset($_SERVER[$n]) ? $_SERVER[$n] : '[undefine]'; }
@header("content-Type: text/html; charset=utf-8");
$Info = array();


$dt = round(@disk_total_space(".")/(1024*1024*1024),3); //总
$df = round(@disk_free_space(".")/(1024*1024*1024),3); //可用
$du = $dt-$df; //已用
$hdPercent = (floatval($dt)!=0)?round($du/$dt*100,2):0;



$Info['php_ini_file'] = function_exists('php_ini_loaded_file') ? php_ini_loaded_file() : '[undefine]';
if (_GET('act') == 'phpinfo') {
if (function_exists('phpinfo')) phpinfo();
else echo 'phpinfo() Function has been disabled.';
exit;
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
  <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom Styles-->
  <link href="assets/css/custom-styles.css" rel="stylesheet" />
  <!-- Custom Js -->
  <script src="assets/js/custom-scripts.js"></script>



</head>

<body>
  <div id="wrapper">
    <!-- 导入导航栏信息 -->
    <?php require 'nav.php'; ?>
    <div id="page-wrapper">
      <div class="header">
        <h1 class="page-header">
          欢迎
          <small>Welcome
            <!-- 获取用户名 -->
            <?php echo $_SESSION['name'] ; ?>
          </small>
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="index.php">主页</a>
          </li>
          <li class="active">index</li>
        </ol>

      </div>

      <div id="page-inner">
        <div class="col-md-6">
          <!--    Context Classes  -->
          <div class="panel panel-default">

            <div class="panel-heading">
              服务器信息
            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <td>服务器域名</td>
                    <td>
                      <?=_SERVER('SERVER_NAME')?>
                    </td>
                  </tr>
                  <tr>
                    <td>服务器端口</td>
                    <td>
                      <?=_SERVER('SERVER_ADDR').':'._SERVER('SERVER_PORT')?>
                    </td>

                  </tr>
                  <tr>
                    <td>服务器环境</td>
                    <td>
                      <?=stripos(_SERVER('SERVER_SOFTWARE'), 'PHP')?_SERVER('SERVER_SOFTWARE'):_SERVER('SERVER_SOFTWARE')?>
                    </td>

                  </tr>
                  <tr>
                    <td>PHP运行环境</td>
                    <td>
                      <?=PHP_SAPI .' PHP/'.PHP_VERSION?>
                    </td>

                  </tr>
                  <tr>
                    <td>PHP配置文件</td>
                    <td>
                      <?=htmlentities($Info['php_ini_file'])?>
                    </td>

                  </tr>
                  <tr>
                    <td>当前网站目录</td>
                    <td>
                      <?=htmlentities(_SERVER('DOCUMENT_ROOT'))?>
                    </td>

                  </tr>
                  <tr>
                    <td>服务器标准时</td>
                    <td>
                      <?=gmdate('Y-m-d H:i:s', time() + 3600 * 8)?>
                    </td>

                  </tr>
                  <tr>
                    <td>查看PHPINFO</td>
                    <td>
                      <a target="_blank" href="?act=phpinfo">PHPINFO详细信息</a>
                    </td>

                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <!--    Context Classes  -->
          <div class="panel panel-default">

            <div class="panel-heading">
              PHP功能组件开启状态
            </div>

            <div class="panel-body">
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <td>MySQLi Client组件</td>
                    <td>
                      <?=get_extension_funcs('mysqli') ? YES : NO ?>
                    </td>
                  </tr>
                  <tr>
                    <td>cURL组件</td>
                    <td>
                      <?=get_extension_funcs('curl') ? YES : NO ?>
                    </td>
                  </tr>
                  <tr>
                    <td>GD library组件</td>
                    <td>
                      <?=get_extension_funcs('gd') ? YES : NO ?>
                    </td>
                  </tr>
                  <tr>
                    <td>EXIF信息查看组件</td>
                    <td>
                      <?=get_extension_funcs('exif') ? YES : NO ?>
                    </td>
                  </tr>
                  <tr>
                    <td>OpenSSL协议组件</td>
                    <td>
                      <?=get_extension_funcs('openssl') ? YES : NO ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Mcrypt加密处理组件</td>
                    <td>
                      <?=get_extension_funcs('mcrypt') ? YES : NO ?>
                    </td>
                  </tr>
                  <tr>
                    <td>IMAP电子邮件函数库</td>
                    <td>
                      <?=get_extension_funcs('imap') ? YES : NO ?>
                    </td>
                  </tr>
                  <tr>
                    <td>SendMail电子邮件支持</td>
                    <td>
                      <?=get_extension_funcs('standard') ? YES : NO ?>
                    </td>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <!--   Basic Table  -->
          <div class="panel panel-default">
            <div class="panel-heading">
              PHP重要参数检测
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th>Memory限制</th>
                    <th>Upload限制</th>
                    <th>POST限制</th>
                    <th>Execution超时</th>
                    <th>Input超时</th>
                    <th>Socket超时</th>
                  </tr>
                  <tr>
                    <td>
                      <?=ini_get('memory_limit')?>
                    </td>
                    <td>
                      <?=ini_get('upload_max_filesize')?>
                    </td>
                    <td>
                      <?=ini_get('post_max_size')?>
                    </td>
                    <td>
                      <?=ini_get('max_execution_time').'s'?>
                    </td>
                    <td>
                      <?=ini_get('max_input_time').'s'?>
                    </td>
                    <td>
                      <?=ini_get('default_socket_timeout').'s'?>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <!--   Basic Table  -->
          <div class="panel panel-default">
            <div class="panel-heading">
              硬盘使用状况
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <td>总空间</td>
                    <th>已用</th>
                    <th>空闲</th>
                    <th>使用率</th>
                  </tr>
                  <tr>
                    <td>
                      <?php echo $dt;?>&nbsp;G</td>
                    <td>
                      <?php echo $du;?>&nbsp;G</td>
                    <td>
                      <?php echo $df;?>&nbsp;G
                    </td>
                    <td>
                      <?php echo $hdPercent;?>&nbsp;%
                    </td>
                  </tr>
                  <table>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /. PAGE INNER  -->

    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. PAGE INNER  -->


</body>

</html>