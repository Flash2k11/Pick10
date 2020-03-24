<?php

	require_once'includes/header.php';
	require_once'conf/db_conf.php';
	
	echo'<h1>PlanetF1 Pick10 Admin Panel</h1>';
	
	$query = mysqli_query($connection, 'SELECT * FROM grand_prix');
	$list = mysqli_fetch_assoc($query);
		echo'<p>
				<a href="game_overview.php?year='.$list['year'].'">'.$list['year'].' Season</a>
			</p>';
		
	require_once'includes/footer.php';

?>