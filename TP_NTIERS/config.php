<?php
 
	/**
	 * mysql_connect is deprecated
	 * using mysqli_connect instead
	 */

	$databaseHost = 'localhost';
	$databaseName = 'test';
	$databaseUsername = 'root';
	$databasePassword = 'YaNg39@9';

	$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, 	$databaseName); 
?>
