<?php
    //including the database connection file
    include_once("config.php");

    // mysql_query is deprecated
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM users where id_event=$id ORDER BY id DESC "); // using mysqli_query instead
?>

<!DOCTYPE html>
    <html>
	<head>	
	    <title>Users</title>
	    <link rel="stylesheet" href="style.css" type="text/css"/>
	</head>

	<body>
	    <a href="index.php">Back</a>
	    <br/>
	    <a href="map.php?id=<?php echo $id?>">How to arrive</a>
	    <br/>
	    <br/>
	    <br/>
	    <div class="menu">
		<?php 
		    echo "<a href=\"add_user.php?id=$id\">Sign Up Now!</a>";
		?>
		<br/>
	    </div>
	
	    <div id="users">
		<table width='100%' border=0>
		    <tr bgcolor='#CCCCCC'>
			<td>Name</td>
			<td>Age</td>
			<td>Email</td>
			<td>Update</td>
		    </tr>

		    <?php
			while($res = mysqli_fetch_array($result)) { 		
			    echo "<tr>";
			    echo "<td>".$res['name']."</td>";
			    echo "<td>".$res['age']."</td>";
			    echo "<td>".$res['email']."</td>";		
			    echo "<td><a href=\"edit_user.php?id=$res[id]&id_event=$id\">Edit</a> | <a href=\"delete_user.php?id=$res[id]&id_event=$id\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>";		
			}	
		    ?>

		
	        </table>
	    </div>
	</body>
    </html>
