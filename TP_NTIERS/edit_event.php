<?php
    // including the database connection file
    include_once("config.php");

    if(isset($_POST['update'])){	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$date = mysqli_real_escape_string($mysqli, $_POST['date']);
	$location = mysqli_real_escape_string($mysqli, $_POST['location']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);
	
	// checking empty fields
	if(empty($name) || empty($date) || empty($location) || empty($description)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($date)) {
			echo "<font color='red'>date field is empty.</font><br/>";
		}
		
		if(empty($location)) {
			echo "<font color='red'>location field is empty.</font><br/>";
		}
		if(empty($description)) {
			echo "<font color='red'>description field is empty.</font><br/>";
		}	
	} 
	else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE Events SET name='$name',date='$date',location='$location',description='$description' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
    }
?>

<?php
    //getting id from url
    $id = $_GET['id'];

    //selecting data associated with this particular id
    $result = mysqli_query($mysqli, "SELECT * FROM Events WHERE id=$id");

    while($res = mysqli_fetch_array($result)){
	$name = $res['name'];
	$date = $res['date'];
	$location = $res['location'];
	$description = $res['description'];

    }
?>

<html>
    <head>	
	<title>Edit Event</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
    </head>

    <body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit_event.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Date</td>
				<td><input type="text" name="date" value="<?php echo $date;?>"></td>
			</tr>
			<tr> 
				<td>Location</td>
				<td><input type="text" name="location" value="<?php echo $location;?>"></td>
			</tr>
			<tr> 
				<td>Description</td>
				<td><input type="text" name="description" value="<?php echo $description;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
    </body>
</html>
