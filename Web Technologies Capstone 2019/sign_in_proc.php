<?php require('library/connect.php'); ?>

<?php

//print_r($_POST);


$email = trim($_POST['email']);

$password = md5(trim($_POST['password']));

//below prints variables
echo '<br>'.$email.' '.$password.'<br>';



$query = "SELECT * FROM users WHERE '$email' = email AND '$password' = password";

$result = mysqli_query($connect, $query);


//print_r($result);
//below prints array


if(!$result) {
	
	header('location:index.php');
	
	} elseif (mysqli_num_rows($result) != 1) {
	
		header('location:index.php');
	
	} else {
	
		$row = mysqli_fetch_array($result);
		session_start();
		$_SESSION['email'] = $row['email'];
		header('location:admin_home.php');
	}

















echo 'Bottom of page';

?>