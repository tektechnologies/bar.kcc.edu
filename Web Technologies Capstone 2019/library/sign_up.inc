<content>
	<!--This starts signup area-->

	<body>

		
	
	
	
<form method="post" action="sign_up_verify.php" class="sign_up_style">

	<h1 style="	margin: 1.5em 0 .5em 0; padding-top: 10px;">Sign Up Form</h3>
	
	<br>
	<h4> First Name</h4>
	<input type="text" name="f_name" required value="">
	
	<h4> Last Name</h4>
	<input type="text" name="l_name" required value="">
	
	<h4>Email Address</h4>
	<input type="email" name="email" required value="">
	
	<h4>Confirm Email Address</h4>
	<input type="email" name="email_confirm" required value="">
	
	<h4>Password</h4>
	<input type="password" name="password" required value="">
	
	<h4>Confirm Password</h4>
	<input type="password" name="password_confirm" required value="">
	
	<br><br>
<!--	<input type="submit" name="submit" required value="Sumbit">-->
	
	 <input type="reset"  class="btn btn-primary" name="reset" value="Clear Form" required />
	
	 <input type="submit" class="btn btn-primary" id="sign-up" value="Sign Up" />
</form>

	
	

	
	
	
	
	</body>
	
	
	
</content>
<!--This terminates signup area-->