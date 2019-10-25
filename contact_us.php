<?php
//require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	require('head.php');
	?>
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
			<h1>Contact Us</h1>
			<h2>Have any questions or concerns? <br/> Let us know.</h2>
		</div>
		
		<!-- Main Content of the page -->
		<div class="content">
		
			<!-- Contact us header-->
			<h1 class="body-header text-shadow"> Fill out form below</h1>

			<div class="body-content">
				<!-- Contact form-->
				<div class="center">
				<form class="contact-us" method="post" action="contact_us.php">
					<fieldset>
						<legend><h3>Contact Us</h3></legend>
						<div class="contact-us-left">
							Email: <input class="form-control" type="email" name="email" required>
							Type:<br>
							<select class="form-control">
								<option value="question">Question</option>
								<option value="order-issue">Order Issue</option>
								<option value="booster-application">Booster Application</option>
								<option value="other">Other</option>
							</select> <br>
						</div>
						<div class="contact-us-right">
							Write here: <br>
							<textarea class="form-control" required></textarea>
						</div>
						<input class="custom-button" type="submit" value="Send">
					</fieldset>
				</form>
				</div>
			</div>
			
		</div>
		
		<?php
			require('footer.php');
		?>
		
	</div>
</body>

<!-- Resources used:

Snippets of code have been taken from W3school.
Favicon downloaded from:
	http://www.favicon.cc/?action=icon&file-id=320000
Logo taken from:
	http://leagueoflegendseloboost09.yolasite.com/
Background Image taken from Riot Games.

And League of Legends for inspiration!
-->
</html>