<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'webtech2019');
if(!$connect) {
	//die('This program has ended.');
	echo 'You have an error: /connect.inc';
} else {
	//comented out after initial test.
 	//echo 'test to connect: You are connected';
}
?>