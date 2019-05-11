<?php require('library/session.inc'); ?>

<!--Code reuse in progress: index Page here-->
	
<?php include('library/head_section.inc');?>
	
<?php include('library/nav_section1.inc');?>



<?php

//server has number called a cookie with a key value that is addressed when a question if a session is set returns
//yes if it is and if not do this, dont allow connection. the tmp file has #num #email and then if they match the connection 
//can occur. This means that a session variable has been set. We can set variable for how long a user can have for a session. 
//session_start(); means set something in tmp folder with server info so that a session can occur and parameters can be passed
//!isset starts the implementation of session to occur



//modual you can use to bring in code variable to a session, 
if (!isset($_SESSION['email'])){
	
	echo 'Home Nav';
}else{ 
	//echo 'Admin Nav';
	
	 require('library/admin_nav.inc');
}
?>







<?php require('library/adminHome_content.inc');?>

<?php include('library/footer_section.inc');?>
