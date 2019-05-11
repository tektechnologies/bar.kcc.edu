<!--Code reuse in progress: career pathways here-->
<?php include('library/head_section.inc');?>
<?php include('library/nav_section.inc');?>

<body>
	<div class="container" id="main">
	<div class="page-text">
		<h1>Career Pathways > Programming</h1>
<p>All the programs, apps, and websites on your computer or your phone work by giving your computer (or phone) instructions about what to do and show based on what you click or type. People in programming/ development jobs use different kinds of software languages (like Spanish or French, but with funny names like Java and Ruby) to write the instructions (or scripts) that these apps and websites follow to make your computer or phone act how you want them to. They also make sure that the instructions written by other people are working like they are supposed to. People in these jobs are often creative, good at solving problems, and can give good instructions.</p>
</div>
	<!-- begin card decks -->
	<!-- 	<div class="card-deck">
			<div class="card" style="width: 18rem;">
			  <div class="card-body d-flex flex-column">
				<h5 class="card-title">Job title</h5>
				<p class="card-text">
					<b>Education:</b> Education level required<br>
					<b>Salary:</b> Estimated yearly salary<br>
					Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. 
				</p>
				<a href="#" class="btn btn-primary mt-auto">Learn more</a>
			  </div>
			</div>
			<div class="card" style="width: 18rem;">
			  <div class="card-body d-flex flex-column">
				<h5 class="card-title">Job title</h5>
				<p class="card-text">
					<b>Education:</b> Education level required<br>
					<b>Salary:</b> Estimated yearly salary<br>
					Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. 
				</p>
				<a href="#" class="btn btn-primary mt-auto">Learn more</a>
			  </div>
			</div>
	</div>
	<br>
		<div class="card-deck">
			<div class="card" style="width: 18rem;">
			  <div class="card-body d-flex flex-column">
				<h5 class="card-title">Job title</h5>
				<p class="card-text">
					<b>Education:</b> Education level required<br>
					<b>Salary:</b> Estimated yearly salary<br>
					Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. 
				</p>
				<a href="#" class="btn btn-primary mt-auto">Learn more</a>
			  </div>
			</div>
			<div class="card" style="width: 18rem;">
			  <div class="card-body d-flex flex-column">
				<h5 class="card-title">Job title</h5>
				<p class="card-text">
					<b>Education:</b> Education level required<br>
					<b>Salary:</b> Estimated yearly salary<br>
					Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. 
				</p>
				<a href="#" class="btn btn-primary mt-auto">Learn more</a>
			  </div>
			</div>
	</div>
	<br>
	<div class="card-deck">
			<div class="card" style="width: 18rem;">
			  <div class="card-body d-flex flex-column">
				<h5 class="card-title">Job title</h5>
				<p class="card-text">
					<b>Education:</b> Education level required<br>
					<b>Salary:</b> Estimated yearly salary<br>
					Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. 
				</p>
				<a href="#" class="btn btn-primary mt-auto">Learn more</a>
			  </div>
			</div>
			<div class="card" style="width: 18rem;">
			  <div class="card-body d-flex flex-column">
				<h5 class="card-title">Job title</h5>
				<p class="card-text">
					<b>Education:</b> Education level required<br>
					<b>Salary:</b> Estimated yearly salary<br>
					Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. Job description goes here. 
				</p>
				<a href="#" class="btn btn-primary mt-auto">Learn more</a>
			  </div>
			</div>
	</div>
	<br>
end card decks
	</div>
 -->	
	
	
	
	
		
<section class=" row1">
<!-- Career Pathway content STARTS here  there are mutiple items in the database that rotate randomly in the 6 spaces.-->
<!--IF I were to do an actual portal for I am Iowa IT, I might add an administrative window to add new information.-->
	
<?php
require('location: ../../library/connect.php'); 

$query = "SELECT * FROM programming ORDER BY RAND()";
	
$result = mysqli_query($connect, $query);

if(!$result){
	
	echo 'No results for you!';
	
} else {
	
	while($row = mysqli_fetch_array($result)){

	
		
	echo '<div class="card" style="width: 45%;">';
  
	echo '<div class="card-body d-flex flex-column">';	

    echo'<h5 class="card-title">'.$row['jobtitle'].'</h5>';
		
	echo '<p class="card-text">';
	
	echo'<b>Education:</b> '.$row['education'].'<br>';
		
	echo'<b>Salary:</b> $'.$row['salary'].' or more.<br>';
	
	echo ''.$row['jobdescription'].'</p>';
		

echo '</div>';
			echo '<a href="" class="btn btn-primary">Learn more</a>';

echo '</div>';
	}
}	

?>

	
	</section><!-- This is the end of the career pathway database. -->	
		<br>
	</div><!--Close Container-->
		

<?php include('library/footer_section_two.inc');?>
	
	
	
	