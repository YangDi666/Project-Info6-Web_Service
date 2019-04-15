<?php
	//including the database connection file
	include("config.php");

	//getting id and id_event of the data from url
	$id = $_GET['id'];
	$id_event=$_GET['id_event'];
	//deleting the row from table
	$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

	//redirecting to the display page (showusers.php in our case)
	header("Location:showusers.php?id=$id_event");
?>

