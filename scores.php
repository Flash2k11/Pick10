<?php

	require_once'includes/header.php';
	require_once'conf/db_conf.php';
	require_once'conf/functions.php';
	
	if(!isset($_GET['gp'])){echo'No Grand Prix Selected';}
	else{
		
		$grand_prix = $_GET['gp'];
		
		$query = mysqli_query($connection, 'SELECT * FROM grand_prix WHERE venue = \''.$grand_prix.'\' ');
		if(mysqli_num_rows($query)<1){die('No such GP');}
		$grand_prix_info = mysqli_fetch_assoc($query);
		
		
		echo'<h1>Scores for '.$grand_prix_info['venue'].' Grand Prix</h1>';
		
		$query2 = mysqli_query($connection, 'SELECT * FROM grand_prix WHERE venue = \''.$grand_prix_info['venue'].'\'');
		$grand_prix_result = mysqli_fetch_assoc($query2);
		
		echo'<h3>'.$grand_prix_info['venue'].' GP '.$grand_prix_info['year'].' Final Result:</h3>
		
			 <table>
				<tr>
					<td>1st Place:</td> <td>'.$grand_prix_result['1st'].'</td>
				</tr>
				<tr>
					<td>2nd Place:</td> <td>'.$grand_prix_result['2nd'].'</td>
				</tr>
				<tr>
					<td>3rd Place:</td> <td>'.$grand_prix_result['3rd'].'</td>
				</tr>
				<tr>
					<td>4th Place:</td> <td>'.$grand_prix_result['4th'].'</td>
				</tr>
				<tr>
					<td>5th Place:</td> <td>'.$grand_prix_result['5th'].'</td>
				</tr>
				<tr>
					<td>6th Place:</td> <td>'.$grand_prix_result['6th'].'</td>
				</tr>
				<tr>
					<td>7th Place:</td> <td>'.$grand_prix_result['7th'].'</td>
				</tr>
				<tr>
					<td>8th Place:</td> <td>'.$grand_prix_result['8th'].'</td>
				</tr>
				<tr>
					<td>9th Place:</td> <td>'.$grand_prix_result['9th'].'</td>
				</tr>
				<tr>
					<td>10th Place:</td> <td>'.$grand_prix_result['10th'].'</td>
				</tr>
			</table>
				';
				
		$countScore = new countScore;
		
		$countScore->calculate_score($connection, $grand_prix_info);
		
	
	}
	
		require_once'includes/footer.php';
?>