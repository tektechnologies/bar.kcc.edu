<?php include('library/head_section.inc');?>
<?php include('library/nav_section.inc');?>

<body>
	<div class="container" id="main">
	<div class="page-text">
		<h1>Thanks for Joining our Email List!</h1>
	<div class="row">
		<div class="col">

<?php

if ($_POST['fullname'] == ""){
	header('location: contact.php');
	die();// terminates them if they are trying to inject bad code. or exit();
} else { 


//print_r($_POST);
//echo '<br><br>';
$fullname = $_POST['fullname'];
$email = $_POST['email'];


	
echo '<h3>We are updating our resources every day, '.$fullname.' </h3>';
echo '<h4>You will recieve your emails weekly at '.$email.'</h4>';


$openDoc = fopen('mailing_list.txt', 'a+');


if(!$openDoc){
	echo 'Nope this didnt work';
	exit;
	} else { 
	//echo 'Your doc is there... go  look bro';
	
	$mail_info = "$fullname, $email; \n";
	
	//echo $mail_info;
	
	$dataMining = fwrite($openDoc, $mail_info);

if (!$dataMining){
	echo 'You were not added to the list, it didnt work';
	die();
	} else {
		echo 'We will get an email out to you soon!';
		}
	}
}



?>
<!--

<br><br><br>
<h3>Admin Side</h3>
<form method="post" action="list_MailingList.php">
<input type="hidden" name="check" value="yes">

<input type="submit" name="submit" value="See Mailing List"><br><br><br><br>
<a href="Home Page.html">HOME</a>
-->
</form>

</div>
	</div>
	</div>


<?php include('library/footer_section.inc');?>