<content><!--This starts signup area-->

<form method="post" action="add_album_proc.php" class="sign_up_style" enctype="multipart/form-data">

	<h3>Add an Album</h3>
	<br><br>
	<h4>Album Name</h4>
	<input type="text" name="album_name" required value="">
	
	
	
	<h4> Album Artist</h4>
	<input type="text" name="artist" required value="">
	
		
	<h4>Genre</h4>
	<?php
	$names = array('Rock','Pop','Metal','Reggae', 'Jazz','Hip Hop','Soundtrack','Grunge');
	
	echo '<select name="genre">';
	foreach($names as $x){
		echo'<option value="'.$x.'">'.$x.'</option>';
	}
	echo '</select>'
	?>
	

	
	
	
	<h4>Published Date</h4>
	<input type="text" name="date" required value="">
	
	
	
	<h4>Number of Songs</h4>
	<?php
	echo '<select name="song_num">';
	$songs = range(1, 15);
	foreach($songs as $y){
	echo '<option value="'.$y.'">'.$y.'</option>';
	}

	echo '</select>';
	
	?>
	
	
	<h4>Total Album Time</h4>
	<input type="text" name="total_time" required value="">
	
	
	
	<h4>Upload Album Cover</h4>
	<input type="file" name="image" required value="">
	
	
	
	
	<br><br>
	<input type="submit" name="submit" required value="Up Load Album" required>
</form>
</content>
<!--This terminates signup area-->