<?php

	class countScore {
		
		public $connection;
				
		function calculate_score($con, $gpi) {
			
			$connection = $con;
			$grand_prix_info = $gpi;
			
			$query = mysqli_query($connection, 'SELECT * FROM grand_prix WHERE venue =\''.$grand_prix_info['venue'].'\'');
			$grand_prix_result = mysqli_fetch_assoc($query);
				
			$query2 = mysqli_query($connection, 'SELECT * FROM player_picks WHERE grand_prix = \''.$grand_prix_info['venue'].'\' ');
			while ($picks = mysqli_fetch_assoc($query2)){
				
				$query3 = mysqli_query($connection, 'SELECT * FROM player_picks WHERE grand_prix = \''.$grand_prix_info['venue'].'\' AND user = \''.$picks['user'].'\'');
				while ($score2 = mysqli_fetch_assoc($query3)) {
					
					$p1=0;
					$p2=0;
					$p3=0;
					$p4=0;
					$p5=0;
					$p6=0;
					$p7=0;
					$p8=0;
					$p9=0;
					$p10=0;
				
				if($score2['pick_1'] == $grand_prix_result['1st']){$p1 = '25';}
					elseif($score2['pick_1'] == $grand_prix_result['2nd']){$p1 = '18';}
					elseif($score2['pick_1'] == $grand_prix_result['3rd']){$p1 = '15';}
					elseif($score2['pick_1'] == $grand_prix_result['4th']){$p1 = '12';}
					elseif($score2['pick_1'] == $grand_prix_result['5th']){$p1 = '10';}
					elseif($score2['pick_1'] == $grand_prix_result['6th']){$p1 = '8';}
					elseif($score2['pick_1'] == $grand_prix_result['7th']){$p1 = '6';}
					elseif($score2['pick_1'] == $grand_prix_result['8th']){$p1 = '4';}
					elseif($score2['pick_1'] == $grand_prix_result['9th']){$p1 = '2';}
					elseif($score2['pick_1'] == $grand_prix_result['10th']){$p1 = '1';}
					else{$p1 = '0';}
					
					if($score2['pick_2'] == $grand_prix_result['1st']){$p2 = '18';}
					elseif($score2['pick_2'] == $grand_prix_result['2nd']){$p2 = '25';}
					elseif($score2['pick_2'] == $grand_prix_result['3rd']){$p2 = '18';}
					elseif($score2['pick_2'] == $grand_prix_result['4th']){$p2 = '15';}
					elseif($score2['pick_2'] == $grand_prix_result['5th']){$p2 = '12';}
					elseif($score2['pick_2'] == $grand_prix_result['6th']){$p2 = '10';}
					elseif($score2['pick_2'] == $grand_prix_result['7th']){$p2 = '8';}
					elseif($score2['pick_2'] == $grand_prix_result['8th']){$p2 = '6';}
					elseif($score2['pick_2'] == $grand_prix_result['9th']){$p2 = '4';}
					elseif($score2['pick_2'] == $grand_prix_result['10th']){$p2 = '2';}
					else{$p2 = '0';}
					
					if($score2['pick_3'] == $grand_prix_result['1st']){$p3 = '15';}
					elseif($score2['pick_3'] == $grand_prix_result['2nd']){$p3 = '18';}
					elseif($score2['pick_3'] == $grand_prix_result['3rd']){$p3 = '25';}
					elseif($score2['pick_3'] == $grand_prix_result['4th']){$p3 = '18';}
					elseif($score2['pick_3'] == $grand_prix_result['5th']){$p3 = '15';}
					elseif($score2['pick_3'] == $grand_prix_result['6th']){$p3 = '12';}
					elseif($score2['pick_3'] == $grand_prix_result['7th']){$p3 = '10';}
					elseif($score2['pick_3'] == $grand_prix_result['8th']){$p3 = '8';}
					elseif($score2['pick_3'] == $grand_prix_result['9th']){$p3 = '6';}
					elseif($score2['pick_3'] == $grand_prix_result['10th']){$p3 = '4';}
					else{$p3 = '0';}
					
					if($score2['pick_4'] == $grand_prix_result['1st']){$p4 = '12';}
					elseif($score2['pick_4'] == $grand_prix_result['2nd']){$p4 = '15';}
					elseif($score2['pick_4'] == $grand_prix_result['3rd']){$p4 = '18';}
					elseif($score2['pick_4'] == $grand_prix_result['4th']){$p4 = '25';}
					elseif($score2['pick_4'] == $grand_prix_result['5th']){$p4 = '18';}
					elseif($score2['pick_4'] == $grand_prix_result['6th']){$p4 = '15';}
					elseif($score2['pick_4'] == $grand_prix_result['7th']){$p4 = '12';}
					elseif($score2['pick_4'] == $grand_prix_result['8th']){$p4 = '10';}
					elseif($score2['pick_4'] == $grand_prix_result['9th']){$p4 = '8';}
					elseif($score2['pick_4'] == $grand_prix_result['10th']){$p4 = '6';}
					else{$p4 = '0';}
					
					if($score2['pick_5'] == $grand_prix_result['1st']){$p5 = '10';}
					elseif($score2['pick_5'] == $grand_prix_result['2nd']){$p5 = '12';}
					elseif($score2['pick_5'] == $grand_prix_result['3rd']){$p5 = '15';}
					elseif($score2['pick_5'] == $grand_prix_result['4th']){$p5 = '18';}
					elseif($score2['pick_5'] == $grand_prix_result['5th']){$p5 = '25';}
					elseif($score2['pick_5'] == $grand_prix_result['6th']){$p5 = '18';}
					elseif($score2['pick_5'] == $grand_prix_result['7th']){$p5 = '15';}
					elseif($score2['pick_5'] == $grand_prix_result['8th']){$p5 = '12';}
					elseif($score2['pick_5'] == $grand_prix_result['9th']){$p5 = '10';}
					elseif($score2['pick_5'] == $grand_prix_result['10th']){$p5 = '8';}
					else{$p5 = '0';}
					
					if($score2['pick_6'] == $grand_prix_result['1st']){$p6 = '8';}
					elseif($score2['pick_6'] == $grand_prix_result['2nd']){$p6 = '10';}
					elseif($score2['pick_6'] == $grand_prix_result['3rd']){$p6 = '12';}
					elseif($score2['pick_6'] == $grand_prix_result['4th']){$p6 = '15';}
					elseif($score2['pick_6'] == $grand_prix_result['5th']){$p6 = '18';}
					elseif($score2['pick_6'] == $grand_prix_result['6th']){$p6 = '25';}
					elseif($score2['pick_6'] == $grand_prix_result['7th']){$p6 = '18';}
					elseif($score2['pick_6'] == $grand_prix_result['8th']){$p6 = '15';}
					elseif($score2['pick_6'] == $grand_prix_result['9th']){$p6 = '12';}
					elseif($score2['pick_6'] == $grand_prix_result['10th']){$p6 = '10';}
					else{$p6 = '0';}
					
					if($score2['pick_7'] == $grand_prix_result['1st']){$p7 = '6';}
					elseif($score2['pick_7'] == $grand_prix_result['2nd']){$p7 = '8';}
					elseif($score2['pick_7'] == $grand_prix_result['3rd']){$p7 = '10';}
					elseif($score2['pick_7'] == $grand_prix_result['4th']){$p7 = '12';}
					elseif($score2['pick_7'] == $grand_prix_result['5th']){$p7 = '15';}
					elseif($score2['pick_7'] == $grand_prix_result['6th']){$p7 = '18';}
					elseif($score2['pick_7'] == $grand_prix_result['7th']){$p7 = '25';}
					elseif($score2['pick_7'] == $grand_prix_result['8th']){$p7 = '18';}
					elseif($score2['pick_7'] == $grand_prix_result['9th']){$p7 = '15';}
					elseif($score2['pick_7'] == $grand_prix_result['10th']){$p7 = '12';}
					else{$p7 = '0';}
					
					if($score2['pick_8'] == $grand_prix_result['1st']){$p8 = '4';}
					elseif($score2['pick_8'] == $grand_prix_result['2nd']){$p8 = '6';}
					elseif($score2['pick_8'] == $grand_prix_result['3rd']){$p8 = '8';}
					elseif($score2['pick_8'] == $grand_prix_result['4th']){$p8 = '10';}
					elseif($score2['pick_8'] == $grand_prix_result['5th']){$p8 = '12';}
					elseif($score2['pick_8'] == $grand_prix_result['6th']){$p8 = '15';}
					elseif($score2['pick_8'] == $grand_prix_result['7th']){$p8 = '18';}
					elseif($score2['pick_8'] == $grand_prix_result['8th']){$p8 = '25';}
					elseif($score2['pick_8'] == $grand_prix_result['9th']){$p8 = '18';}
					elseif($score2['pick_8'] == $grand_prix_result['10th']){$p8 = '15';}
					else{$p8 = '0';}
					
					if($score2['pick_9'] == $grand_prix_result['1st']){$p9 = '2';}
					elseif($score2['pick_9'] == $grand_prix_result['2nd']){$p9 = '4';}
					elseif($score2['pick_9'] == $grand_prix_result['3rd']){$p9 = '6';}
					elseif($score2['pick_9'] == $grand_prix_result['4th']){$p9 = '8';}
					elseif($score2['pick_9'] == $grand_prix_result['5th']){$p9 = '10';}
					elseif($score2['pick_9'] == $grand_prix_result['6th']){$p9 = '12';}
					elseif($score2['pick_9'] == $grand_prix_result['7th']){$p9 = '15';}
					elseif($score2['pick_9'] == $grand_prix_result['8th']){$p9 = '18';}
					elseif($score2['pick_9'] == $grand_prix_result['9th']){$p9 = '25';}
					elseif($score2['pick_9'] == $grand_prix_result['10th']){$p9 = '18';}
					else{$p9 = '0';}
					
					if($score2['pick_10'] == $grand_prix_result['1st']){$p10 = '1';}
					elseif($score2['pick_10'] == $grand_prix_result['2nd']){$p10 = '2';}
					elseif($score2['pick_10'] == $grand_prix_result['3rd']){$p10 = '4';}
					elseif($score2['pick_10'] == $grand_prix_result['4th']){$p10 = '6';}
					elseif($score2['pick_10'] == $grand_prix_result['5th']){$p10 = '8';}
					elseif($score2['pick_10'] == $grand_prix_result['6th']){$p10 = '10';}
					elseif($score2['pick_10'] == $grand_prix_result['7th']){$p10 = '12';}
					elseif($score2['pick_10'] == $grand_prix_result['8th']){$p10 = '15';}
					elseif($score2['pick_10'] == $grand_prix_result['9th']){$p10 = '18';}
					elseif($score2['pick_10'] == $grand_prix_result['10th']){$p10 = '25';}
					else{$p10 = '0';}
					
					$result = $p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8+$p9+$p10;
				
					
					
					
					echo'<p>'.$score2['user'].'\'s Picks for '.$grand_prix_info['venue'].':<br/>
							1st: '.$score2['pick_1'].'<br/>
							2nd: '.$score2['pick_2'].'<br/>
							3rd: '.$score2['pick_3'].'<br/>
							4th: '.$score2['pick_4'].'<br/>
							5th: '.$score2['pick_5'].'<br/>
							6th: '.$score2['pick_6'].'<br/>
							7th: '.$score2['pick_7'].'<br/>
							8th: '.$score2['pick_8'].'<br/>
							9th: '.$score2['pick_9'].'<br/>
							10th: '.$score2['pick_10'].'<br/>
							Total score for this round: '.$result.'
						</p>
					';
			}
			}
					
					
					
					
			
		}
		
	}

?>