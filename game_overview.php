<?php

	require_once'includes/header.php';
	require_once'conf/db_conf.php';
	
	if(!isset($_GET['year'])) {die('Invalid season selected');}
	
	$year = $_GET['year'];
	
	
	
	echo'<h1>PlanetF1 Pick 10 Season '.$year.'</h1>';
	
	echo '<h3>Current Standings</h3>
			<p>';
			
	$query3 = mysqli_query($connection, 'SELECT * FROM players');
	while ($list = mysqli_fetch_assoc($query3)) {
		
		foreach(mysqli_query($connection, 'SELECT SUM(score) FROM player_picks WHERE user = \''.$list['name'].'\'') as $row) {
			
			mysqli_query($connection, 'UPDATE players SET total_score=\''.$row['SUM(score)'].'\' WHERE name =\''.$list['name'].'\'');
			
		}
		
	}
			
		$query4 = mysqli_query($connection, 'SELECT * FROM players WHERE year =\''.$year.'\' ORDER BY total_score DESC');
		$a = 1;
		while($total_score = mysqli_fetch_assoc($query4)) {
		
		echo''.$a.substr(date('jS', mktime(0,0,0,1,($a%10==0?9:($a%100>20?$a%10:$a%100)),2000)),-2).': '.$total_score['name'].': '.$total_score['total_score'].'<br/>';
		
		$a++;
			}
		


		

	
	echo'</p>';
	
	
	
	echo'<h3>View completed race results:</h3>
				<p>';
	
	$query = mysqli_query($connection, 'SELECT * FROM grand_prix WHERE year = \''.$year.'\' AND 1st != \'\' ');
	while ($overview = mysqli_fetch_assoc($query)){
		

				echo'<a href=\'scores.php?gp='.$overview['venue'].'\'>'.$overview['venue'].' GP</a><br/>';
				
	}
	
	echo' </p>';
	
	echo'<h3>Upcoming races</h3>
			<p>';
			
	$query5 = mysqli_query($connection, 'SELECT * FROM grand_prix WHERE year = \''.$year.'\' AND 1st = \'\' ');
	while ($upcoming = mysqli_fetch_assoc($query5)){
		
		echo''.$upcoming['venue'].' GP<br/>';
		
	}
	
	echo'</p>';
	
	
	echo'<h3>Add stuff to database</h3>
			<p>
				<a href="add_player.php?year='.$year.'">Add new player</a><br/>
				<a href="add_result.php?year='.$year.'">Add new race result</a></br>
				<a href="add_picks?year='.$year.'">Add player picks</a></br>
			</p>';
	
	
	
	require_once'includes/footer.php';
			

?>