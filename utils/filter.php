<?php
@session_start();
/*���ڹ����û��Ƿ��¼*/
if(@$_SESSION['user']==""){
  echo "<script>alert('����δ��¼�����ȵ�¼!');history.back();</script>"; 
  exit;
  }
?>