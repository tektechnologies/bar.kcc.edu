<?php


require('library/connect.php');

//print_r($_POST);

$f_name = $_POST['f_name'];

$l_name = $_POST['l_name'];

$email = trim($_POST['email']);

$password = md5(trim($_POST['password']));

//echo"<br>$f_name<br>$l_name<br>$email<br>$password<br>";



$query = "INSERT INTO users (f_name, l_name, email, password)

VALUES ('$f_name', '$l_name', '$email', '$password')";


$result = mysqli_query($connect, $query);

if (!result) {
	
	header('location: index.php');
	
	} else {
	
		/*if you want this to work...add the session variable*/
	header('location: index.php');
	
}


?>