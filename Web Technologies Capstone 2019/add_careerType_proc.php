<?php 
require('library/session.inc');
require('library/connect.inc');
//Test the array to see if it works.
// print_r($_POST);

$album_name = $_POST['album_name'];
$artist = $_POST['artist'];
$genre = $_POST['genre'];
$date = $_POST['date'];
$song_num = $_POST['song_num'];
$total_time = $_POST['total_time'];
//going to store images in a folder in order to move a file it is another global. $_FILES, filename, filetype, filesize.
//explode the file name to include. jpg, gif,png, 
$image_path = 'album_art/'.$_FILES['image']['name'];
$image_size = $_FILES['image']['size'];
//$image_type = $_FILES['image']['type'];
//echo $album_name, $artist, $genre, $date;
if($image_size = 0) {
	
	echo 'Thats not an image';
	
	}else {
		
	move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
	
}


$query = "INSERT INTO albums(album_name, date, artist, song_num, total_time, genre, image)
 VALUES ('$album_name', '$date', '$artist', '$song_num', '$total_time', '$genre', '$image_path')";
 
 $result = mysqli_query($connect, $query);
 
 
 
 
 
 if(!$result) {
	 echo 'na begin agin.';
 }else{
	 //echo 'All you bass belongs to us. ';
	 header('location:admin_home.php');
 }










?>