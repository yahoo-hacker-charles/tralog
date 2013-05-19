<?php	
@session_start();

	$startdst = $_POST['startdst'];

	$enddst = $_POST['enddst'];
	echo("$startdst");
	//echo <br>;
	echo("$enddst");
	//µÇÂ¼
	include_once("utils/ConnDB.php");
	echo("         ");
	if (!empty($startdst)) 
	{
		$query="select * FROM shop_location as a WHERE a.places LIKE '%$startdst%' AND a.places LIKE '%$enddst%' ";
		//$query="select * FROM shop_location as a WHERE a.places LIKE '%beijing%' AND a.places LIKE '%tiananmen%' ";
	}
	
	$result= mysql_query($query);
	// or die("²éÑ¯µÇÂ½ÐÅÏ¢Ê§°Ü");
	//echo $result;
	//$row =mysql_fetch_array($result) ;
	//echo $row['user_name'];
	$entry_array = array();

	while ($row = mysql_fetch_array($result)) 
	{ 
		array_push($entry_array, $row);
		
		//echo $row["user_name"];		
		//echo $row["location"];
		//echo $row["places"];
	}
	?>
		<script type="text/javascript">

		function show(i){
		
			//location = search_array["places"].split("$");
			//alert("location");
			aleart(i);
		}
	</script>

	
	<?php
	$i = 0;
	for($i = 0; $i < count($entry_array); $i++){
		//echo $entry_array[$i]["places"];
		//´òÓ¡×ó²à±ß¿ò
	?>


	<ul>
        <?=$varv?> = <?=$entry_array[$i]["location"]?>;
		<li><a href="#" onClick="location = varv.split("$"); alert(location)"> <?=$entry_array[$i]["places"]?></a></li>
		
    </ul>
	<?php
	}
	?>

								

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 70%; width:100% }
    </style>
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
  </head>
  <body>
    <div id="map-canvas"/>
  </body>
</html>
