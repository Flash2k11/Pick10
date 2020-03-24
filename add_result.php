<?php

	require_once'includes/header.php';
	require_once'conf/db_conf.php';
	
	
	if(isset($_POST['1st'])){
		
		mysqli_query($connection, 'UPDATE grand_prix SET 1st=\''.$_POST['1st'].'\', 2nd=\''.$_POST['2nd'].'\', 3rd=\''.$_POST['3rd'].'\', 4th=\''.$_POST['4th'].'\', 5th=\''.$_POST['5th'].'\', 6th=\''.$_POST['6th'].'\', 7th=\''.$_POST['7th'].'\', 8th=\''.$_POST['8th'].'\', 9th=\''.$_POST['9th'].'\', 10th=\''.$_POST['10th'].'\' WHERE venue = \''.$_POST['venue'].'\'')or die('Didnt fucking work '.mysqli_error($connection).'');
		
		echo'<p>
				Result succesfully entered for the '.$_POST['venue'].' GP, please continue onto the <a href="scores.php?gp='.$_POST['venue'].'">completed results page</a> to see the calculated results.
			</p>';
	}
	
	elseif(isset($_POST['add_result'])){
		
		echo'<h3>Insert race result for '.$_POST['add_result'].' GP</h3>
			<form class="addform" action="add_result.php" method="post">
				1st Place:<select id="1st" name="1st">';
				
				$query = mysqli_query($connection, 'SELECT * FROM driver');
				while($driver = mysqli_fetch_assoc($query)){
					
					echo'<option value="'.$driver['driver_name'].'">'.$driver['driver_name'].'</option>';
					
				}
				
				echo'</select><br/>';
		
				echo'2nd Place:<select id="2nd" name="2nd">';
				
				$query2 = mysqli_query($connection, 'SELECT * FROM driver');
				while($driver = mysqli_fetch_assoc($query2)){
					
					echo'<option value="'.$driver['driver_name'].'">'.$driver['driver_name'].'</option>';
					
				}
				
				echo'</select><br/>';
				
				echo'3rd Place:<select id="3rd" name="3rd">';
				
				$query3 = mysqli_query($connection, 'SELECT * FROM driver');
				while($driver = mysqli_fetch_assoc($query3)){
					
					echo'<option value="'.$driver['driver_name'].'">'.$driver['driver_name'].'</option>';
					
				}
				
				echo'</select><br/>';
				
				echo'4th Place:<select id="4th" name="4th">';
				
				$query4 = mysqli_query($connection, 'SELECT * FROM driver');
				while($driver = mysqli_fetch_assoc($query4)){
					
					echo'<option value="'.$driver['driver_name'].'">'.$driver['driver_name'].'</option>';
					
				}
				
				echo'</select><br/>';
				
				echo'5th Place:<select id="5th" name="5th">';
				
				$query5 = mysqli_query($connection, 'SELECT * FROM driver');
				while($driver = mysqli_fetch_assoc($query5)){
					
					echo'<option value="'.$driver['driver_name'].'">'.$driver['driver_name'].'</option>';
					
				}
				
				echo'</select></br>';
				
				echo'6th Place:<select id="6th" name="6th">';
				
				$query6 = mysqli_query($connection, 'SELECT * FROM driver');
				while($driver = mysqli_fetch_assoc($query6)){
					
					echo'<option value="'.$driver['driver_name'].'">'.$driver['driver_name'].'</option>';
					
				}
				
				echo'</select><br/>';
				
				echo'7th Place:<select id="7th" name="7th">';
				
				$query7 = mysqli_query($connection, 'SELECT * FROM driver');
				while($driver = mysqli_fetch_assoc($query7)){
					
					echo'<option value="'.$driver['driver_name'].'">'.$driver['driver_name'].'</option>';
					
				}
				
				echo'</select><br/>';
				
				echo'8th Place:<select id="8th" name="8th">';
				
				$query8 = mysqli_query($connection, 'SELECT * FROM driver');
				while($driver = mysqli_fetch_assoc($query8)){
					
					echo'<option value="'.$driver['driver_name'].'">'.$driver['driver_name'].'</option>';
					
				}
				
				echo'</select></br>';
				
				echo'9th Place:<select id="9th" name="9th">';
				
				$query9 = mysqli_query($connection, 'SELECT * FROM driver');
				while($driver = mysqli_fetch_assoc($query9)){
					
					echo'<option value="'.$driver['driver_name'].'">'.$driver['driver_name'].'</option>';
					
				}
				
				echo'</select></br>';


				echo'10th Place:<select id="10th" name="10th">';
				
				$query10 = mysqli_query($connection, 'SELECT * FROM driver');
				while($driver = mysqli_fetch_assoc($query10)){
					
					echo'<option value="'.$driver['driver_name'].'">'.$driver['driver_name'].'</option>';
					
				}
				
				echo'</select><br/>';
				
				echo'<input type="hidden" name="venue" value="'.$_POST['add_result'].'">
					 <input type="submit" value="submit">
				</form>';
	}else{
		
		if(!isset($_GET['year'])){die('Invalid year');}else{
			
			$year = $_GET['year'];
			
		}
		
		echo'<h3>Add Race Result</h3>
				<p>Please select a race from the list below to add a result for.
				</p>
				
					<form class="addform" action="add_result.php" method="post">
						<select id="add_result" name="add_result">';
					
					$query = mysqli_query($connection, 'SELECT * FROM grand_prix WHERE year = \''.$year.'\' AND 1st = \'\'');
					while ($grand_prix = mysqli_fetch_assoc($query)) {
						
						echo'<option value="'.$grand_prix['venue'].'">'.$grand_prix['venue'].' GP</option>';
						
						}
						
						echo'</select>
								<input type="hidden" name="gp" value="'.$grand_prix['venue'].'">
								<input type="submit" value="submit">
							</form>';
		
		
	}
	
	require_once'includes/footer.php';
	
	?>