<?php

// Turn on error reporting

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

// Create database connection

	$connection = new mysqli("localhost", "matthew", "theend12!", "PF1_Pick_10");
	if ($connection->connect_errno) {
		echo'Failed to connect to database:'.$connection->connect_error.'';
		}
		
?>