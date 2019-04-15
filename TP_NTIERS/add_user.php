<?php
    // including the database connection file
    include_once("config.php");

    if(isset($_POST['ok']))
    {	
	$id=mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)||($age>150)||($age<1)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		if(($age>150)||($age<1)){
			echo "<font color='red'>Check your age, please.</font><br/>";
		}	
	} 
	else {	
		//insert the user

		$result = mysqli_query($mysqli,  "INSERT INTO users(name,age,email,id_event) VALUES('$name','$age','$email','$id')");
		
		header("Location: showusers.php?id=$id");
	}
    }
?>

<html>
    <head>	
	<title>Inscription</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
    </head>

    <body>
	<a href="index.php">Home</a>
	<br/><br/>
	<a href="showusers.php?id=<?php echo $_GET['id'];?>">Back</a>
	<br/><br/>
	<p>Input your information, please!</p>
	<br/><br/>
	<form name="form1" method="post" action="add_user.php">
		<table border="0">
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td><input type="submit" name="ok" value="OK"></td>
			</tr>
		</table>
	</form>
    </body>
</html>
