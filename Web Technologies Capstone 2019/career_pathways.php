<!--Code reuse in progress: career pathways here-->
<?php include('library/head_section.inc');?>
<?php include('library/nav_section.inc');?>


<body>
	<div class="container" id="main">
	<div class="page-text">
		<h1>Career Pathways</h1>
		<p>Are you a student interested in majoring in an IT field, or someone seeking a change of career in this direction? If so, we'd be happy to help you discover the best fit for you! Listed below are different categories of IT jobs with a general description of each. For more information, including specific job titles, descriptions, salaries, and education requirements, you can click the "Learn more" button for each category.</p>
		<p>If you have no clue where to start looking, we recommend taking one of career assessments linked on our <a href="resources.php">resources</a> page. These only take a few minutes of answering questions. Based on who you are as a person, they'll recommend job categories specifically catered to you! Although you ultimately know yourself best, this can help you to narrow down your options a bit, especially when you're just beginning your search.</p>
	</div>
	    <!--	<div class="card-deck">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="images/app_design.jpg" alt="Application icons on a screen">
			  <div class="card-body d-flex flex-column">
				<h5 class="card-title">Application Design</h5>
				<p class="card-text">Careers in application design involve creating new application software or improving existing software. Software is a collection of instructions that allow a computer to work (e.g. apps).</p>
				<a href="#" class="btn btn-primary mt-auto">Learn more</a>
			  </div>     
			</div> 
		-->	
		
<section class="row1">
<!-- Career Pathway content STARTS here  there are mutiple items in the database that rotate randomly in the 6 spaces.-->
<!--IF I were to do an actual portal for I am Iowa IT, I might add an administrative window to add new information.-->
	
<?php
require('location: ../../library/connect.php'); 

$query = "SELECT * FROM careercards ORDER BY RAND() LIMIT 8";

//$query = "SELECT * FROM careercards";
	
$result = mysqli_query($connect, $query);

if(!$result){
	
	echo 'No results for you!';
	
} else {

	echo '<div class="card-deck" id="career_pathways">';
	
	while($row = mysqli_fetch_array($result)){
	
	$link = str_replace(' ', '_', strtolower($row['careertype']));

	// Begin individual cards	
	echo '<div class="card" style="width: 18rem;">';

	echo '<img class="card-img-top" src="images/'.$link.'.jpg" alt="'.$row['careertype'].'" height="200" width="300">';
  
	echo '<div class="card-body d-flex flex-column">';

    echo'<h4 class="card-title">'.$row['careertype'].'</h4>';
	
	echo '<p class="card-text">'.$row['description'].'</p>';
	
	echo '<a href="careers.php?category='.$link.'" class="btn btn-primary mt-auto">Learn more</a>';

	echo '</div>';
	echo '</div>';
	}
	echo '</div>';
}	

?>

	
</section><!-- This is the end of the career pathway database. -->	
		<br>
	</div><!--Close Container-->



<?php include('library/footer_section_two.inc');?>
	

	
	
	
	
	
	
	

