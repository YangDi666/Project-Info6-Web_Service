<?php
    //including the database connection file
    include_once("config.php");

    //fetching data in descending order (lastest entry first)
    $result = mysqli_query($mysqli, "SELECT * FROM Events ORDER BY id DESC");
    // using mysqli_query instead
?>

<!DOCTYPE html>
    <html>
        <head>	
	    <title>Events</title>
	    <link rel="stylesheet" href="style.css" type="text/css"/>
        </head>

        <body>
            <h1 style="font-family:cabri;color:#003E3E;text-align:center;font-size:60px">Welcome!</h1>
            <div class="menu">
                <a href="add_event.html">Add a New Event</a><br/><br/>
            </div>

            <div id="table">
	        <table width='80%' border=0>
	            <tr bgcolor='#CCCCCC'>
		        <td>Name</td>
		        <td>Date</td>
		        <td>Location</td>
		        <td>Description</td>
		        <td>Update</td>
	            </tr>

	            <?php 
               	    //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	            while($res = mysqli_fetch_array($result)) { 		
		        echo "<tr>";
		        echo "<td>".$res['name']."</td>";
			echo "<td>".$res['date']."</td>";
			echo "<td>".$res['location']."</td>";
			echo "<td>".$res['description']."</td>";	
			echo "<td><a href=\"edit_event.php?id=$res[id]\">Edit</a> | <a href=\"delete_event.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"showusers.php?id=$res[id]\">Inscription</a></td>";		
		    }
	            ?>
                </table>
	    </div>
	    <div class="footer">
                <p>
                    @ 2018  All Rights Reserved<br>
                    Copyright ownership belongs to YANG Di, shall not be reproduced , copied, or used in other ways without permission.
                </p>
            </div>
	</body>
    </html>
