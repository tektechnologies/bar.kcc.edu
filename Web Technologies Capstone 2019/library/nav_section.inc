<!--Main Content Starts Here!-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="index.php">I AM I.T.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
	  <li class="nav-item">
		<a class="nav-link" href="career_pathways.php">Career Pathways</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="about.php">About</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="contact.php">Contact</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="resources.php">Resources</a>
	  </li>

			<?php
			 session_start();
				  //NEW FUNCTION         THIS IS A GLOBAL BECAUSE IT IS ALL CAPPED. 
				  if(session_status() == PHP_SESSION_ACTIVE && isset($_SESSION['email'])){

				   echo  '<li class="nav-item adminLink">';

				   echo  '<a class="nav-link adminLink" href="admin_home.php">Admin Home</a>';

				   echo ' </li>';

				  } else {

				  echo  '<a class="nav-link adminLink" href="adminIndex.php">Login</a>';

				  }
				  ?>


</ul>





		<form method="post" action="search_page.php" class="form-inline my-2 my-lg-0">

				<a class="nav-link linked" href="https://www.youtube.com/channel/UCTzPH4GoYMskBxBOt7AhHNQ"><img src="./images/youtube.png" alt="YouTube icon" height="40" width="40" style="float:right" /></a>
				<a class="nav-link linked" href="index.php"><img src="./images/Blue.png" alt="twitter icon" height="40" width="40" style="float:right" /></a>	
				<a class="nav-link twitter" href="index.php"><img src="./images/Twitter.png" alt="twitter icon" height="40" width="40" style="float:right" /></a>

				<input name="search_item" class="form-control mr-sm-2 searchMobile" type="search" placeholder="Search" aria-label="Search">
				<input class="btn btn-info my-2 my-sm-0 searchMobile" type="submit" value="Search">

		  </form>

  </div>

	
	
</nav>

