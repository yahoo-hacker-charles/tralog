<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Walkway_Bold_400.font.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="js/ie_png.js"></script>
   <script type="text/javascript">
       ie_png.fix('.png, #sidebar, .container');
   </script>
<![endif]-->
<style type="text/css">
<!--
.STYLE1 {font-size: medium}
-->
</style>
</head>

<body id="page1">
<!-- sidebar -->
 <?php	
 @session_start() ;
 ?>
<div id="sidebar">
	<!-- .logo -->
	<div class="logo">
  	<a href="index.php"><img src="images/logo.gif" alt="" /></a>
  </div>
	<!-- /.logo -->
  <div class="indent">
    <form id="form2" method="post" action="login.php">
      <p>
        <label>USER NAME
          <input type="text" name="username" />
        </label>
      </p>
      <p>
        <label>PASSWORD
        <input name="passward" type="password" />
        </label>
      </p>
      <p>
        <label>login
        <input name="submit" type="submit" value="Login" />
</label>
        <label>regrist
        <input type="submit" name="submit" value="Regist" />
</label>
      </p>
    </form>
    <ul>
      <li>MyExpriences </li>
      <li>Myfriends</li> 
    </ul>
  </div>
  
</div>
<div id="main">
  <!-- header -->
  <div id="header">
    <div class="row-1">
    	<div class="container">
        <!-- .nav -->
        <ul class="nav">
          <li><a href="index.php" class="current">HOME</a></li>
          <li><a href="index.php" >SEARCH</a></li>
          </ul>
    	  <!-- /.nav -->
      </div>
    </div>
    <div class="row-2">
    	<div class="container">
        <div class="intro">
          <p><b>Each travel </b> is unique and marked by individual story. </p>
          <p><br />
            This is my <strong>Travel Log. </strong></p>
          <p>.<br />
            <a href="#">That's why I have the basis for pride.</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- content -->
  <div id="content">
  	<div class="inner_copy"><a href="http://www.cssmoban.com/" title="网页模板">网页模板</a></div>
  	<div class="row-2">
      <div class="container">
      	<div class="indent">
        	<h2 class="icon2">INTRODUCTION </h2>
            <p class="STYLE1"><strong>Nerve be confused about finding a perfect travel schedule.</strong></p>
            <p class="STYLE1"><strong>Nerve be confused about finding a perfect Travel Friends.</strong></p>
            <p><span class="STYLE1"><strong>Nerve be confused about writing a perfect daily </strong></span>. </p>
      	</div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div id="footer">
  	<div class="container">
      <div class="indent"></div>
    </div>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>