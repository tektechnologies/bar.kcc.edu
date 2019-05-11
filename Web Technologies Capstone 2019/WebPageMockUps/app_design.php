<!--Code reuse in progress: career pathways here-->

<?php include('library/head_section.inc');?>
<?php include('library/nav_section.inc');?>


<body>
	<div class="container" id="main">
	<div class="page-text">
		<h1>Career Pathways > Application Design</h1>
		<p>Computer systems need two major elements to work: hardware and software. Hardware is the part of computer systems that you can physically touch (e.g. keyboard, monitor). Software is a collection of instructions that allow a computer to work (e.g. apps). Careers in application design involve creating new application software or improving existing software. Employees under this job family have excellent technical and design skills.</p>
	</div>
	<!-- begin card decks -->
<!--	<div class="card-deck">
			 card begins here 
			<div class="card" style="width: 18rem;">
			  <div class="card-body d-flex flex-column">
				<h5 class="card-title">Application Development</h5>
				<p class="card-text">
					<b>Education:</b> Bachelor's Degree<br>
					<b>Salary:</b> $70,000 to $100,000 or more<br>
					Development Operations is the link between software and operations to make organization’s processes run more efficiently. They help use software to complete tasks usually done by occupations in the Infrastructure family. 
				</p>
				 modal begins here 
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Learn more</button>

				<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Application Development</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						...
						<br>
						<a href="https://www.indeed.com/q-Application-Developer-l-Iowa-jobs.html">Browse local job listings on Indeed</a>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
			 card begins here 
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
	</div>-->
	
	
	
<section class="row1">
<!-- Career Pathway content STARTS here  there are mutiple items in the database that rotate randomly in the 6 spaces.-->
<!--IF I were to do an actual portal for I am Iowa IT, I might add an administrative window to add new information.-->
	
<?php
require('location: ../../library/connect.php'); 

$query = "SELECT * FROM appdesign ORDER BY RAND()";
	
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
