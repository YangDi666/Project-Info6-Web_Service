<?php
    include_once("config.php");   
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT location FROM Events where id=$id");
    while($res = mysqli_fetch_array($result)) { 
    $loc= $res['location'];}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css"/>
	<script
	    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJW4jsPlNKgv6jFm3B5Edp5ywgdqLWdmc&sensor=false">	    
	</script>

	<title>Locating</title>

	<script>
	    var loc="<?php echo $loc;?>";
	</script>

	<script 	
	    src="mapGoole.js">		
	</script>

    </head>
    <body>
        <div id="map_canvas" style='width: 800px; height: 600px;'></div>
    </body>
</html>
