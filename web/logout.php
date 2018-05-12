<?php
  //开启session
  session_start();
  if(isset($_SESSION['name'])){
  //2、清空session信息
  $_SESSION = array();
    
  //3、清楚客户端sessionid
  if(isset($_COOKIE[session_name()]))
  {
    setCookie(session_name(),'',time()-3600,'/');
  }
  //4、彻底销毁session
  session_destroy();
  // 跳转到登录界面
header("Location:login.php");
  }
  else
  header("Location:login.php");
?>