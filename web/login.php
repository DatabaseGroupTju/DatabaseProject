<!DOCTYPE html>
<!-- saved from url=(0049)https://code.z01.com/v4/examples/floating-labels/ -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>登陆</title>
<!-- 自建css -->
<link rel="stylesheet" href="./css/style.css">
<!-- 新 Bootstrap4 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<!-- popper.min.js 用于弹窗、提示、下拉菜单 -->
<script src="https://cdn.bootcss.com/popper.js/1.12.5/umd/popper.min.js"></script>
<!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
</head>
<body>
 <form class="form-signin" method = "post" action = "login.php">
      <div class="text-center mb-4">
        <img class="mb-4" src="./src/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">System Login</h1>
      </div>
      <div class="form-label-group">
        <input type="text" id="inputId" name="user" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="inputId">Username</label>
      </div>
      <div class="form-label-group">
        <input type="password" id="inputPassword" name="passwd" class="form-control" placeholder="Password" required="">
        <label for="inputPassword">Password</label>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="登录">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
    </form>
</body></html>


<?php  
include('conn.php');
session_start();
if(isset($_SESSION['name'])){
header("Location:index.php");
exit();
}
if (isset($_POST["submit"]) && $_POST["submit"] == "登录") {  
  $id = $_POST["user"];  
  $psw = $_POST["passwd"];  
  if ($id == "" || $psw == ""){  
    //弹出对话框后返回到先前页面  
    echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
  }else {  
    //设定字符集,解决数据库插入可能出现乱码，设置编码为GBK  
    //构造sql查询语句  
    $sql = "select username,password from USER where username = '$id' and password = '$psw'";  
    //执行SQL语句  
    $result = $conn->query($sql);  
    //统计执行结果影响的行数  
    $num = $result->num_rows;  
    //如果已经存在该用户  
    if ($num){  
      //将数据以索引的方式存储在数组中  
      $row = mysqli_fetch_array($result);  
      $_SESSION['name'] = $row[0];
      echo "<script>window.location.href='http://118.89.240.135/index.php';</script>";  
    }else{  
      //弹出对话框后返回到先前页面  
      echo "<script>alert('用户名或者密码不正确！');history.go(-1);</script>";  
    }  
  }  
}
?>