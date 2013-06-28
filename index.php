<html>
	<head>
		<title></title>
	</head>

	<body>
		
		<form method="get" action="app.php">

			Location<br />
			Latitude <input type="text" id="latitude" name="latitude" /><br />
			Longitude <input tyep="text" id="longitude" name="longitude" /><br /><br />

			<button onClick="getLocation(); return false;">Get location</button><br /><br />

			Radius (km)<br />
			<input type="text" value="60" name="radius" /><br /><br />

			<input type="submit" value="Get me sunshine" />
		</form>


		<script>
		function getLocation()
		  {
		  if (navigator.geolocation)
		    {
		    navigator.geolocation.getCurrentPosition(showPosition);
		    }
		  else{document.write="Geolocation is not supported by this browser.";}
		  }
		function showPosition(position)
		  {
		  document.getElementById("latitude").value=position.coords.latitude;
		  document.getElementById("longitude").value=position.coords.longitude;	
		  }
		</script>

	</body>

</html>