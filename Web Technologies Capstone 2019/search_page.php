<!--Code reuse in progress: career pathways here-->
<?php include('library/head_section.inc');?>
<?php include('library/nav_section.inc');?>

<body>
	<div class="container" id="main">
	<div class="page-text">
		<h1>Search Results</h1>
		<p>Here are the search results we found for your search query:</p>
	</div>
		
		
		

<section class="row1">
<?php require('library/connect.php');
//checks to see that the array was delivered
//print_r($_POST);

$search_item = $_POST['search_item'];
$query = "SELECT * FROM careercards
 WHERE careertype LIKE '%$search_item%' 
 OR description LIKE '%$search_item%'  ";
	

$result = mysqli_query($connect, $query);

if(!$result) { 
	echo 'No Search results.';
}
elseif (mysqli_num_rows($result) == 0 ) { 

		echo 'No Results in Search.';
} else {
	echo '<div class="card-deck" id="career_pathways">';
	while ($row = mysqli_fetch_array($result)) {
		
		$link = str_replace(' ', '_', strtolower($row['careertype']));
		
	echo '<div class="card" style="width: 20rem;">';

//	echo '<img class="card-img-top" src="'.$row['images'].'" alt="Career Type" height="200" width="300">';
  
		echo '<img class="card-img-top" src="images/'.$link.'.jpg" alt="'.$row['careertype'].'" height="200" width="300">';
		
	echo '<div class="card-body">';

    echo'<h4 class="card-title">'.$row['careertype'].'</h4>';
	
	echo '<p class="card-text">Location: '.$row['description'].'</p>';
	
	echo '<a href="'.$row['phpurl'].'" class="btn btn-primary mt-auto">Learn more</a>';
		
echo '</div>';
echo '</div>';
	}
	echo '</div>';
}	

	
?>
	
	
	
	
	
	

</section><!-- This is the end of the Device search results from the kirkwood_bas database. -->
<br>
	</div><!--Close Container-->
</body>


<?php include('library/footer_section_two.inc');?>
