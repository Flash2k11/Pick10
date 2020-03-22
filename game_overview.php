<?php

	require_once'conf/db_conf.php';
	
	if(!isset($_GET['year'])) {die('Invalid season selected');}
	
	$year = $_GET['year'];
	
	$query = mysqli_query($connection, 'SELECT * FROM grand_prix WHERE year = \''.$year.'\' AND 1st != \'\' ');
	
	echo '<h1>PlanetF1 Pick 10 Season '.$year.'</h1>';
	
	echo'<h3>View completed race results:</h3>
			<p>';
	
	while ($overview = mysqli_fetch_assoc($query)){
		

				echo'<a href=\'scores.php?gp='.$overview['venue'].'\'>'.$overview['venue'].'</a><br/>';
				
	}
	
	echo' </p>';
			

?>