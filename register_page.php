<?php
//require('config.php');

//Start session if not started already
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_POST)
{
    $_SESSION['ORDER']=$_POST;
}

?>

<!DOCTYPE html>
<html>
<head>
	<?php
		require "head.php";
	?>

	<!-- Tooltips CDN -->

	<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<!-- Validator CDN-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
	
	<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip(); 
		});

	</script>

</head>

<body>
	<!-- Body container-->
	<div class="container">
		<?php			
		require('header.php');
		?>
		<!-- Background banner -->
		<div id="banner">
			<!-- Transparent black box effect over the image -->
			<div class="tint"></div>
		</div>
		
		<!-- Text on the banner -->
		<div class="container1 boost-margin">
			<h1>Register</h1>
			<h2>Create an account</h2>
		</div>
		
		<!-- Main Content of the page -->
		<div class="content">
		
			<!-- Purchase Boost header-->
			<h1 class="body-header text-shadow"> Enter your details below: </h1>
			<div class="body-content center">

				<p> Fill out the form below to create your Elo Boosters account which you may use to track
				your order progress.
				<br>
				On the next page, you will review your order before paying.
				</p>
				<!-- Account registration form-->
				<form  data-toggle="validator" method="post" action="create_account.php" class="registerForm">
					<fieldset>
						<legend><h3>Elo Boosters Account</h3></legend>
							<div class="form-group">
								<label for="EBusername"> Username:</label>  <input class="form-control" type = "text" name = "EBusername" placeholder="Elo Boosters Username" data-toggle="tooltip" data-placement="bottom" title="This will be your Elo Boosters account username."required>
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group">
								<label for="EBemail"> Email:</label>  <input class="form-control" type = "email" name = "EBemail" placeholder="Email" data-toggle="tooltip" data-placement="bottom" title="We will send progress updates to you through this email."required>
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group formPassword">
								<label for="EBpassword"> Password:</label>
								<br>
								<div data-toggle="tooltip" data-placement="bottom" title="This will be your Elo Boosters account password.">
									<input class="form-control" id="EBpassword" type = "password" name = "EBpassword" placeholder="Password" data-minlength="8" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>
									<input class="form-control float-right" type = "password" id="EBpasswordConfirm" data-match="#EBpassword" data-match-error="Passwords must match" placeholder="Confirm" required>
							        <div class="help-block"> Minimum eight characters, at least one letter and one number</div>
								</div>
								<div class="help-block with-errors"></div>
							</div>
					</fieldset>
					<hr>
					<fieldset>
						<legend><h3>League of Legends Account</h3></legend>
							<div class="form-group">
								<label for="LOLusername"> Account username:</label>  <input class="form-control" type = "text" name = "LOLusername" placeholder="LoL Username" data-toggle="tooltip" data-placement="bottom" title="This is the username you use to log in."required>
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group">
								<label for="LOLsummoner"> Summoner name:</label>  <input class="form-control" type = "text" name = "LOLsummoner" placeholder="Summoner Name" data-toggle="tooltip" data-placement="bottom" title="This is the display name that appears to other players."required>
								<div class="help-block with-errors"></div>
							</div>

							<div class="form-group formPassword">
								<label for="LOLpassword"> Password:</label>
								<br>
								<div data-toggle="tooltip" data-placement="bottom" title="This is your LoL account password.">
									<input class="form-control" id="LOLpassword" type = "password" name = "LOLpassword" placeholder="Password" data-minlength="8" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>
									<input class="form-control float-right" type = "password" id="LOLpasswordconfirm" data-match="#LOLpassword" data-match-error="Passwords must match" placeholder="Confirm" required>
							        <div class="help-block"> Minimum eight characters, at least one letter and one number</div>
								</div>
								<div class="help-block with-errors"></div>
							</div>
					</fieldset>
					
					<div class="center">
						<button class="custom-button">Create account</button>
					</div>
				</form>
			</div>

		</div>
		<?php
			require('footer.php');
		?>
	</div>	
	
</body>
<html>