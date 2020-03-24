<?php

	require_once'includes/header.php';
	require_once'conf/db_conf.php';
	
	if(isset($_GET['add'])){
		
		if(isset($_POST['player'])) {
			mysqli_query($connection, 'INSERT INTO players (name, year, total_score) VALUES (\''.$_POST['player'].'\', \''.$_POST['year'].'\', 0)')or die('Failed to add player');
			
			echo'<p>
					New player '.$_POST['player'].' succesfully added to the game, please return to the <a href="game_overview.php?year=2020">overview page</a> to continue.
				<p>';
		}
		
		
	}else{
		
		if(!isset($_GET['year'])){die('Invalid year');}else{$year = $_GET['year'];}
		
		echo'<h3>Add new player to game</h3>
			<p>
				Use the form below to add a new player to the game and select which season they are participating in.
			</p>
				<form class="addform" action="add_player.php?add=1" method="post">
					<input type="text" name="player">
					<select id="year" name="year">
						<option value="year">'.$year.'</option>
					<input type="submit" name="submit">
				</form>';
		
	}
	
	require_once'includes/footer.php';

?>