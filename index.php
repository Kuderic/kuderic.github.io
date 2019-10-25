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
		
		<!-- Text and button on the banner -->
		<div class="container1">
			<h1>Elo boost your account</h1>
			<h2>Professional Elo boosting service </h2>
			<a href="boost.php" class="custom-button">BUY ELO BOOST</a>
		</div>
		
		<!-- Main Content of the page -->
		<div class="content">
		
			<!-- What is ELO Boosting? -->
			<h1 class="body-header text-shadow">	What is Elo Boosting?</h1>
			<div class="body-content">
				<h3><u>Elo Boosting Basics</u></h3>
				<p>
					Elo is a representation of the skill level of a League of Legends player.
					Elo Boosting is a way for a player to improve his rating without having	to play himself.
				</p>
				<h3>Why Elo Boost?</h3>
				<p>
					Have you ever wished that you could play a tier or a division (or two?)
					above your current level in League of Legends, but just can't find the time to level
					up your account(s)? We can help you with that, that's exactly what a LoL or ELO boosting service is:
					our professional players will take over your account securely
					(so no one will ever notice it's not you that is playing!)
					and play with it until you reach your desired level!
				</p>
				<h3>Is Elo Boosting Safe?</h3>
				<p>
					The security of your account is guranteed through our own personally developed program which hides your personal
					details and picks the nearest IP to your location. Nobody will be able to tell that its not you who's playing.
					Our Elo Boosters will provide a screenshot upon league advancement, so you can have the accomplishment
					to show off to any dubious friends.
				</p> <p>
					In addition, our Boosters will analyze your most played champions and pick the ones they feel the most
					comfortable with. This way, nobody will question why you suddenly started playing someone new. Our Boosters
					will also
				</p>
			</div>

			<hr/>
			
			<!-- Who are we? -->
			<h1 class="who-header text_shadow">Who are we?</h1>
			<div class="who-content">
				
				<b> <p class="center">We are the <b class="text_shadow"> ELO BOOSTERS </b>. </p> </b>
				<p class="center">Our goal is providing the most professional Elo Boosting
				services possible to our League of Legends players.</p>
				
				<div class="reason">
					<h2 class="fast">Fast </h2>
					<p>It is guaranteed that we will do the job fast and efficiently.
						With Elo boosters hand-picked from across the globe,
						you will be sure to have a Elo booster in your region.
					</p>
				</div><div class="reason">
					<h2 class="safe">Safe </h2>
					<p>Our coworkers use custom VPN servers which change the IP address
					for each and every account, making it impossible for Riot to trace
					the games back to us.
					</p>
				</div><div class="reason">
					<h2 class="quality">Quality </h2>
					<p>We offer the you the best treatment,
					100% customer satisfaction is
					guaranteed. If there is any problem you have,
					we wont hesitate to solve it.
					</p>
				</div><div class="reason">
					<h2 class="cheap">Cheap </h2>
					<p>We have the cheapest prices within the Elo boosting market.
						We have always strived to keep our prices
						he best by comparing them with our competition.
					</p>
				</div>				
			</div>
			
			<!-- Boost now button -->
			<div class="who-button">
				<a href="boost.php" class="custom-button">Boost Now</a>		
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
	http://www.favicon.cc/?action=icon&file_id=320000
Logo taken from:
	http://leagueoflegendseloboost09.yolasite.com/
Background Image taken from Riot Games.

And League of Legends for inspiration!
-->
</html>