<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	//require('config.php');
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
			<h1>Thank You</h1>
			<h2>Your order has been processed</h2>
		</div>
		
		<!-- Main Content of the page -->
		<div class="content">
		
			<!-- Purchase Boost header-->
			<h1 class="body-header text-shadow">	<a class="thank-you" href="index.html"><u>Return to home</u></a></h1>
			<!-- Instructions -->
			<div class="body-content">
				<div class="thank-you-img-container">
					<img class="thank-you-img" src="resources/thank_you.jpg" alt="Thank you!">
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