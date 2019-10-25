<?php
//require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	require('head.php');
	?>

	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	// Add the new slick-theme.css if you want the default styling
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script>
	    $(document).ready(function(){
	      $('#myCarousel').slick({
	      	dots: true,
	      	autoplay: true,
	      	autoplaySpeed: 2000,
	      	arrows: true
	      });
	      $('#ourWork').slick({
	      	dots: true,
	      	autoplay: true,
	      	autoplaySpeed: 2000,
	      	arrows: true
	      });
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
			<h1>Hear and See</h1>
			<h2>What others are saying about us</h2>
		</div>
		
		<!-- Main Content of the page -->
		<div class="content">
		
			<!-- Purchase Boost header-->
			<h1 class="body-header text-shadow"> Our Work </h1>

			<!-- Our Work -->
			<div class="body-content">
				<div class="center">
					<h2>Here are some testimonials of the ELO Boosting jobs we've done.</h2>

					<!-- Slick -->
					<div id="myCarousel">
						<!-- Slides -->
					    <div>
							<p>perfect work. thank your guys. communication was awesome! keep going!</p>
							<p class="name">Max J. after boost to Silver IV</p>
					    </div>

					    <div>
						<p>
							Awesome job! Will recommend your service to friends. Legit.
						</p>
						<p class="name">Chris B. after boost to Silver V</p>
					    </div>

					    <div>
						<p>
							Amazingly quick. boosters worked around the clock to complete the order. A++ reliable.

						</p>
						<p class="name">Angelo S. after boost to Gold IV</p>
					    </div>

					    <div>
						<p>
							awsome 7 wins in a row and. its like terminator noting can stop him
						</p>
						<p class="name">Steffen S. after boost to Silver III</p>
					    </div>

					    <div>
						<p>
							Nice experience, some boosters were nice and helpful.
							My questions or problems were quickly answered. Thanks.
						</p>
						<p class="name">Dolores M. after boost to Silver I</p>
					    </div>

					    <div>
						<p>
							Really good service! Booster (garnekyou) got straight onto the job right after
							I submitted my order. Played 8games in a night and only lost 1 game. Got me
							from S1 to G5 in a night. Really good job.
						</p>
						<p class="name">Pei pei L. after boost to Gold V</p>
					    </div>
					</div>

					<!--
					<br><br><br>
					<h2>Here are some examples of our work.</h2>
					<div id="ourWork">
					    <div>
					    	<img src="resources/review1.jpg">
					    </div>
					</div>-->

				</div>
			</div>
			
		<div class="white">
		<?php
			require('footer.php');
		?>
	</div>
		</div>
		
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