<html>
    <head>
	<title>Add Event</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
    </head>

    <body>
	<?php
	    //including the database connection file
	    include_once("config.php");

	    if(isset($_POST['Submit'])) {	
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
		
		    //link to the previous page
		    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	        } 
	        else { 
		    // if all the fields are filled (not empty) 
			
		    //insert data to database	
		    $result = mysqli_query($mysqli, "INSERT INTO Events (date,location,description,name) VALUES ('$date','$location','$description','$name')");

		    //display success message
		    echo "<font color='green'>Event added successfully.";
		    echo "<br/><a href='index.php'>View Result</a>";
	        }
	    }
	?>
    </body>
</html>
