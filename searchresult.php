<?php	
@session_start();
$startdst = $_POST['startdst'];

$enddst = $_POST['enddst'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #searchresult { height: 70%; width:20% }
    </style>
	 <script type="text/javascript">
				function display(){
		$entry_array = array();
//alert(12);
		include_once("utils/ConnDB.php");
		$query="select * FROM shop_location as a WHERE a.places LIKE '%$startdst%' AND a.places LIKE '%$enddst%' ";
		$result= mysql_query($query);
		
		while ($row = mysql_fetch_array($result)) 
		{ 
			alert(123);
			array_push($entry_array, $row);
		}
		var i = 0;
		for(i = 0; i < entry_array.length; i++){
			document.write(entry_array[i]["places"]);
		}
		}
	</script>
	
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
              <form id="form1" method="post" action="searchresult.php">
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
        <div>
          <div id="Layer3">
            <div>
              <form id="form7" method="post" action="">
                <p>
                  <label></label>
                <span class="STYLE1">Travaling Log Catagory </span></p>
              </form>
		
  				
				  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOLLcWGgy1yn3sdB49ucPquU-0EB3cEoM&sensor=true" >
    </script>
    <script type="text/javascript">

	var directionsDisplay;
	var directionsService = new google.maps.DirectionsService();

      	var peking = new google.maps.LatLng(39.9493, 116.3975);
      	var scenic1 = new google.maps.LatLng(39.909341, 116.3974);
	
      	var scenic2 = new google.maps.LatLng(40.354819, 116.017942);
	
	var scenic3 = new google.maps.LatLng(39.895012, 116.320912);
	
	var scenic4 = new google.maps.LatLng(40.00141, 116.328423);
	
      function initialize() {

	directionsDisplay = new google.maps.DirectionsRenderer();

        var mapOptions = {
          center: peking,
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	directionsDisplay.setMap(map);      

     //	var marker = new google.maps.Marker({position:myLatLng, map:map, title: "hi, peking!"});
//     	new google.maps.Marker({position:peking, map:map, title: "hi, peking!"});
//	var message = new google.maps.InfoWindow({
//		content : "<img title='Tianan Men' height='100px' width='100px'  src='tiananmen.jpg'/>",  
  //          	size : new google.maps.Size(100, 100)
//	});
//	var message2 = new google.maps.InfoWindow({
//		content : "<img title='Great Wall' height='100px' width='100px'  src='badaling.jpg'/>",  
  //          	size : new google.maps.Size(100, 100)
//	});
    // 	var mark1 = new google.maps.Marker({position:scenic1, map:map, title: "1.Tianan Men", icon: ''});
     //	var mark2 = new google.maps.Marker({position:scenic2, map:map, title: "2.The Great Wall At Badaling", icon:'' });
     //	var mark3 = new google.maps.Marker({position:scenic3, map:map, title: "3.Beijing West Railway Station", icon:'' });
     //	var mark4 = new google.maps.Marker({position:scenic4, map:map, title: "4.Tsinghua University", icon:''});
    // 	var mark1 = new google.maps.Marker({position:scenic1, map:map, title: "1.Tianan Men" });
    //    var mark2 = new google.maps.Marker({position:scenic2, map:map, title: "2.The Great Wall At Badaling", icon:'http://google-maps-icons.googlecode.com/files/camera.png'});
     	//new google.maps.Marker({position:scenic3, map:map, title: "3.Beijing West Railway Station", icon:'http://google-maps-icons.googlecode.com/files/camera.png'});
     //	new google.maps.Marker({position:scenic3, map:map, title: "3.Beijing West Railway Station"});
     //	new google.maps.Marker({position:scenic4, map:map, title: "4.Tsinghua University", icon:'http://google-maps-icons.googlecode.com/files/camera.png'});

      }
//      var travel_path_coordinates = [scenic1, scenic2, scenic3, scenic4];
	var waypts = [
		{location:scenic2, stopover:true}, 
		{location:scenic3, stopover:true},
	];

/*	//for (var i = 1; i < traval_path_coordinates.length - 1; i++) {
	for (var i = 1; i < 4; i++) {
      		waypts.push({
          		location:travel_path_coordinates[i],
          		stopover:true
      		});
    	}
*/	
	
	function calcRoute(start, end){
		var request = {
   	 		origin:start,
   			destination:end,
			waypoints: waypts,
			//optimizeWaypoints: true,
			optimizeWaypoints: false,
  			travelMode: google.maps.TravelMode.DRIVING
  		};
  		directionsService.route(request, function(result, status) {
    			if (status == google.maps.DirectionsStatus.OK) {
      				directionsDisplay.setDirections(result);
    			}
  		});
	}
	calcRoute(scenic1, scenic4);
  
    	google.maps.event.addDomListener(window, 'load', initialize);
    </script>
				
            </div>
            <div>
              
            </div>
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