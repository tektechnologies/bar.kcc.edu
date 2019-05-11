<?php

session_start();

if(!isset($_SESSION['email'])) {
	header('location: index.php'); 
	}else{

//	echo '<p style="color: blue;">Session is Set</p>';

}
?>