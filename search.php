<?php	
@session_start();
?>

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
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 1101px;
	top: 367px;
}
#Layer2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:2;
	left: 1101px;
	top: 492px;
}
#Layer3 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 1091px;
	top: 359px;
}
.STYLE1 {
	font-family: "宋体";
	font-weight: bold;
}
-->
</style>
</head>

<body id="page1">
<!-- sidebar -->

<div id="sidebar">
	<!-- .logo -->
	<div class="logo">
  	<a href="logined.php"><img src="images/logo.gif" alt="" /></a>
  </div>
	<!-- /.logo -->
  <div class="indent">
    <form id="form2" method="post" action="">
      <p>
        <label>NAME:</label> <?php echo(@$_SESSION['user']['user_name'])?>

      </p>
    </form>
    <ul>
      <li>MyExpriences 
        <form id="form4" method="post" action="">
          <p>
            <label>
              <select name="select">
              </select>
            </label>
          </p>
        </form>
      </li>
      <li>Myfriends
        <form id="form5" method="post" action="">
          <p>
            <label>
              <select name="select2">
              </select>
            </label>
          </p>
        </form>
      </li> 
      <li></li>
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
          <li><a href="logined.php" >HOME</a></li>
         <li><a href="search.php" class="current">SEARCH</a></li>
          </ul>
    	  <!-- /.nav -->
      </div>
    </div>
    <div class="row-2">
    	<div class="container">
        <div class="intro">
          <p><b>Each travel </b> is unique and marked by individual story. </p>
          <p><br />
          This is my <strong>Travel Log. </strong>.</p>
          <p><br />
            <a href="#">That's why we have the basis for pride.</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- content -->
  <div id="content">
  	<div class="inner_copy"><a href="http://www.cssmoban.com/" title="网页模板">网页模板</a></div>
  	<div class="row-1">
   	  <div class="container">
      	<div class="indent">
      	  <div class="wrapper">
              <form id="form1" method="post" action="googlemap-v2.php">
                <p>
                  <label><strong>From:</strong>
                    <input type="text" name="startdst" />
                  </label>
                  <strong> 
                  <label>To:</label>
                  </strong>
                  <label>
                  <input type="text" name="enddst" />
                  </label>
                  <input type="submit" name="Submit" value="Commit" />
                </p>
              </form>
          </div>
      	    <div>此处显示新 Div 标签的内容</div>
   	      <p>&nbsp;</p>
      	</div>
        <div id="Layer3">
   	      <form id="form7" method="post" action="">
   	        <p>
   	          <label></label>
            <span class="STYLE1">Travaling Log Catagory </span></p>
          </form>
          <div>
            	
          </div>
        </div>
   	  </div>
    </div>
    <div class="row-2">
      <div class="container">
      	<div class="indent">
        	<h2 class="icon2">WEATHER　ＦＯＲＥＣＡＳＴ</h2>
        	<p class="icon2">&nbsp;     </p>
        	<div class="wrapper">
		   <script src="yui-min.js"></script>
			<div id="res">
			<div class="mod"></div>
		  </div>
		  </div>
	    </div>
        <a href="#" class="link3"></a>        </div>
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
	
			<script>
			YUI().use('node', 'yql', function(Y) {
				
				var res = Y.one('#res'),
					zip = '90101';
				
				Y.YQL('select * from weather.forecast where location=' + zip, function(r) {
					var el = Y.Node.create('<div class="mod"></div>');
			
					el.set('innerHTML', 'Weather for ' + zip + r.query.results.channel.item.description);
			
					res.setHTML(el);
				
				});
			});			
			</script>
			<div>此处显示新 Div 标签的内容</div>
<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>