<?php

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
		
			 <p>
				1st Place: '.$grand_prix_result['1st'].'<br/>
				2nd Place: '.$grand_prix_result['2nd'].'</br>
				3rd Place: '.$grand_prix_result['3rd'].'<br/>
				4th Place: '.$grand_prix_result['4th'].'</br>
				5th Place: '.$grand_prix_result['5th'].'<br/>
				6th Place: '.$grand_prix_result['6th'].'</br>
				7th Place: '.$grand_prix_result['7th'].'<br/>
				8th Place: '.$grand_prix_result['8th'].'</br>
				9th Place: '.$grand_prix_result['9th'].'<br/>
				10th Place: '.$grand_prix_result['10th'].'</br>
			</p>
				';
				
		$countScore = new countScore;
		
		$countScore->calculate_score($connection, $grand_prix_info);
		
	
	}
	
	
	


	
	
?>