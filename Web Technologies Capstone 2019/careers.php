<?php include('library/head_section.inc');?>
<?php include('library/nav_section.inc');?>
<body>
	<div class="container" id="main">
	<div class="page-text">
	
	
	<?php
		require('location: ../../library/connect.php');
		
		$category_link = @$_REQUEST['category']; // for use in links
		$category_text = ucwords(str_replace('_', ' ', @$_REQUEST['category'])); // for use in displaying text on web page
		$category_db = str_replace('_', '', @$_REQUEST['category']); //for use in calling database
		

		echo '<h1>Career Pathways > '.$category_text.'</h1>';
		
		
		echo '<img src="images/'.$category_link.'_banner.jpg" class="banner" alt="'.$category_text.' banner" style="width: 100%;"><br><br>';
		
		
		echo '<p>';
		
		
		include('library/career_type_descriptions/'.$category_link.'.txt');
		
		
		echo '</p>';
	
		
		// Getting info from the database's table for this category to build cards
		$query = "SELECT * FROM $category_db";
			
		$result = mysqli_query($connect, $query);
		
		if(!$result){

			echo 'Sorry, something went wrong.';
			
		} else {
			echo '<div class="card-deck" id="careers">';
			
			while($row = mysqli_fetch_array($result)){
				
				echo '<div class="card">'; // begins card
				
				echo '<div class="card-body d-flex flex-column">';	// begins card-body
				
				echo'<h5 class="card-title">'.$row['jobtitle'].'</h5>';
				
				echo '<p class="card-text">';
				
				echo'<b>Education:</b> '.$row['education'].'<br>';
				
				echo'<b>Salary:</b> $'.$row['salary'].' or more<br>';
				
				echo '<p>'.$row['jobdescription'].'</p>';
				
				echo '</p>';
				
				
				echo '<a href="https://www.indeed.com/jobs?q='.str_replace(' ', '+', $row['jobtitle']).'&l=Iowa" class="btn btn-primary mt-auto">Browse local job listings</a>';
				
				echo '</div>'; // ends card-body
				echo '</div>'; // ends card
			}
			echo '</div>';
		}

	?>
	
	</div> <!-- ends page-text-->
	</div> <!-- ends container-->
</body>
<?php include('library/footer_section_two.inc');
?>