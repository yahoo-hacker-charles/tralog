<?php
@session_start();
/*用于过滤用户是否登录*/
if(@$_SESSION['user']==""){
  echo "<script>alert('您尚未登录，请先登录!');history.back();</script>"; 
  exit;
  }
?>