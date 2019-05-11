<?php

// Set email variables
$email_to = 'info@tektechnologies.com';
$email_subject = 'Web Capstone Email Submission';

// Set required fields
$required_fields = array('fullname','email', 'business', 'subject', 'comment');

// set error messages
$error_messages = array(
	'fullname' => 'Please enter a Name to proceed.',	
	'email' => 'Please enter a valid Email Address to continue.',
	'business' => 'Please enter a Business to proceed.',
	'subject' => 'Please enter a Subject to proceed.',
	'comment' => 'Please enter your Message to continue.'
);

// Set form status
$form_complete = FALSE;

// configure validation array
$validation = array();

// check form submittal
if(!empty($_POST)) {
	// Sanitise POST array
	foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
	
	// Loop into required fields and make sure they match our needs
	foreach($required_fields as $field) {		
		// the field has been submitted?
		if(!array_key_exists($field, $_POST)) array_push($validation, $field);
		
		// check there is information in the field?
		if($_POST[$field] == '') array_push($validation, $field);
		
		// validate the email address supplied
		if($field == 'email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
	}
	
	// basic validation result
	if(count($validation) == 0) {
		// Prepare our content string
		$email_content = 'New Website Comment: ' . "\n\n";
		
		// simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
		}
		
		// if validation passed ok then send the email
		mail($email_to, $email_subject, $email_content);
		
		// Update form switch
		$form_complete = TRUE;
	}
}

function validate_email_address($email = FALSE) {
	return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}

function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>I Am I.T. Iowa</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Craig Barkley, Bailey Borchert">
	<meta name="viewport" content="width=device-width">
	
	<link href="css/normalize.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/main_style.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/resources.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.0/mootools-yui-compressed.js"></script>
	
	 <script type="text/javascript" src="contact/validation/validation.js"></script>
	
	<script type="text/javascript">
var nameError = '<?php echo $error_messages['fullname']; ?>';
		var emailError = '<?php echo $error_messages['email']; ?>';
		var businessError = '<?php echo $error_messages['business']; ?>';
		var subjectError = '<?php echo $error_messages['subject']; ?>';
		var commentError = '<?php echo $error_messages['comment']; ?>';

		
		
		
		
		
		
		function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
    </script>
	

</head>










<!-- Covered under creative commons license - http://dreamweavertutorial.co.uk/permissions/contact-form-permissions.htm           This site was referenced in the making of this contact form . https://www.youtube.com/watch?v=9KS2QuFXIs8-->
<!--Main Content Starts Here!-->

<?php include('library/nav_section.inc');?>



<body onload="MM_preloadImages('contact/images/x.png')">
	
	<div class="container" id="main">
	<div class="page-text">
		<h1>Contact Us</h1>
	<div class="row">
		
		
		
		
		
		<div class="col" id="form">
			<div class="row3">
		  <?php if($form_complete === FALSE): ?>
			
		<form action="contact.php" method="post" id="comments_form">
			
			<legend>Send an Email</legend>
			<p>Have any thoughts, questions, or concerns?<br>Drop us an email. We'll get back to you as soon as we can.</p>
			
			<div class="form-group">
				<label class="label" "for="name">Name*</label>
				<input name="fullname"  type="text" class="form-control detail" id="fullname"  value="<?php echo isset($_POST['fullname'])? $_POST['fullname'] : ''; ?>" />
				<?php if(in_array('fullname', $validation)): ?><span class="error context"><?php echo $error_messages['fullname']; ?></span><?php endif; ?>
			  </div>
			 
			
			<div class="form-group">
				<label class="label" for="email">Email address*</label>
				<input name="email" type="email" class="form-control detail" id="email" value="<?php echo isset($_POST['email'])? $_POST['email'] : ''; ?>" />
				<?php if(in_array('email', $validation)): ?><span class="error context"><?php echo $error_messages['email']; ?></span><?php endif; ?>
			  </div>
			 
			
			<div class="form-group">
				<label class="label" for="business">Business/Organization*</label>
				<input name="business" type="text" class="form-control detail" id="business" value="<?php echo isset($_POST['business'])? $_POST['business'] : ''; ?>" />
				<?php if(in_array('business', $validation)): ?><span class="error context"><?php echo $error_messages['business']; ?></span><?php endif; ?>
			  </div>
			 
			
			<div class="form-group">
				<label class="label" for="subject">Subject*</label>
				<input name="subject" type="text" class="form-control detail" id="subject" value="<?php echo isset($_POST['subject'])? $_POST['subject'] : ''; ?>" />
				<?php if(in_array('subject', $validation)): ?><span class="error context"><?php echo $error_messages['subject']; ?></span><?php endif; ?>
			  </div>
			 
			
			<div class="form-group">
				<label class="label" for="message">Message*</label>
				<textarea name="comment" class="form-control mess" id="comment"  ><?php echo isset($_POST['comment'])? $_POST['comment'] : ''; ?></textarea>
				<?php if(in_array('comment', $validation)): ?><span class="error context"><?php echo $error_messages['comment']; ?></span><?php endif; ?>

			  </div>
			
			<div class="custom-control custom-checkbox">
													   
<!--				  <input type="checkbox" class="custom-control-input" id="">-->
																			   
					<input type="checkbox" id="recaptcha" name="recaptcha"  checked>
				
<!--				    <img src="images/recaptura.JPG" alt="recaptcha" height="" width="">-->
																			   
<!--				  <label class="custom-control-label" for="customCheck1">I am not a robot</label>-->
				</div>
			
			<br>
			
			<div class ="submit">
			 <input type="reset"  class="btn btn-primary" name="reset" value="Clear Form">
			  <input type="submit" class="btn btn-primary" id="submit" value="Send Message"/>
	</div></div>
			
			
			</form>
			
			<div>	
		<?php else: ?>
        <p style="font-size:35px;">Thank you for your Message!</p>
        <?php endif; ?>
			
		</div>
	  </div>
		
		
		
		
		
		<div class="col">
			
		<form method="post" action="mailingList_processor.php">
			
			<legend>Newsletter Sign-Up</legend>
			<p>Submit your info here to be added to our email list. We'll send you updates and will never spam you. You can opt out at any time.<p>
			<div class="form-group">
				<label for="fullname" style="font-weight: bold;">Name*</label>
				<input type="text" class="form-control" name="fullname" required>
			</div>
			<div class="form-group">
				<label for="email" style="font-weight: bold;">Email address*</label>
				<input type="text" class="form-control" name="email" required>
			</div>
			
			 <input type="reset"  class="btn btn-primary" name="reset" value="Clear Form">
			 <input type="submit" class="btn btn-primary" id="sign-up" value="Sign Up">
			
			
		</form>
		</div>
	</div>
	</div>
	</div>


<!-- Footer STARTS here -->
<div class="footer_two">
	<center>
	<a href="termsOfService.php">Terms</a> | <a href="privacy.php">Privacy</a><br>
	© 2016-2019 I AM I.T., All Rights Reserved
	</center>
	<p>This workforce solution is funded by the IHUM Consortium which is 100% financed through a $15,000,000 grant from the U.S. Department of Labor’s Employment & Training Administration. The product was created by the grantee and does not necessarily reflect the official position of the U.S. Department of Labor. The Department of Labor makes no guarantees, warranties, or assurances of any kind, express or implied, with respect to such information, including any information on linked sites and including, but not limited to, accuracy of the information or its completeness, timeliness, usefulness, adequacy, continued availability, or ownership. This work is licensed under the Creative Commons Attribution 4.0 International License. To view a copy of this license, visit <a href="http://creativecommons.org/licenses/by/4.0/">Creative Commons</a>.</p>
</div>
<div class="page_end"></div><!-- Footer STOPS here -->



<div class="page_end"></div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.js" type="text/javascript"></script>


	
	
	</body>
</html>
