<content>
<body>
	
	<div id="main">
			<video autoplay muted loop id="home_video">
			<source src="images/home_video.mp4" type="video/mp4">
		</video>
		<div id="home" style="padding-top:10px;">
			
		
			
			
			<div class="log_in">
			
				<form method="post" action="sign_in_proc.php">
				
					<div class="form-group row home1">
					
						<label for="inputUserName" style="border-radius: 10px;" class="col-sm-4 col-form-label btn-primary">User Name</label>  
						
						<div class="col-sm-6">
						  <input type="user_name" class="form-control input_special" id="inputEmail3" placeholder="User Name" name="email">
						</div>
						
					</div>
					
					
					<div class="form-group row home">
					<label for="inputPassword3" style="border-radius: 10px;" class="col-sm-4 col-form-label btn-primary">Password</label>
					
						<div class="col-sm-6">
						  <input type="password" class="form-control input_special" id="inputPassword3" placeholder="Password" name="password">
						</div>
					</div>
					
					
					<div class="form-group row home">
					
					
					    <div class="col-sm-10">
						  <button type="submit" style="float:right;" class="btn btn-primary" name="button">Sign in</button>
						</div>
												
					</div>
					
					
				</form>
				
				<a href="sign_upform.php" style="float:right; margin-right:15px; color:white;">Click here to create an account.</a>
			</div>	
			
       	</div>
     </div>


</body>
</content><!--This content area-->