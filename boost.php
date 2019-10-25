<?php
//require('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	require('head.php');
	?>
	<script>
		function updateDivision(current, league) {
			//changes number of options in the division select tag depending on the user inputted league
			if(current=="current") {
				if(['bronze','silver','gold','platinum','diamond'].includes(league) && $('#current-division').children().length != 5) {
					$('#current-division')
				    .find('option')
				    .remove()
				    .end()
				    .append('<option value="1">Division I</option>')
				    .append('<option value="2">Division II</option>')
				    .append('<option value="3">Division III</option>')
				    .append('<option value="4">Division IV</option>')
				    .append('<option value="5">Division V</option>')
				    .val('1');
				}
				else if(['master','challenger'].includes(league) && $('#current-division').children().length != 1) {
					$('#current-division')
				    .find('option')
				    .remove()
				    .end()
				    .append('<option value="1">Division I</option>')
				    .val('1');
				}
			}
			else if(current=="desired") {
				if(['bronze','silver','gold','platinum','diamond'].includes(league) && $('#desired-division').children().length != 5) {
					$('#desired-division')
				    .find('option')
				    .remove()
				    .end()
				    .append('<option value="1">Division I</option>')
				    .append('<option value="2">Division II</option>')
				    .append('<option value="3">Division III</option>')
				    .append('<option value="4">Division IV</option>')
				    .append('<option value="5">Division V</option>')
				    .val('1');
				}
				else if(['master','challenger'].includes(league) && $('#desired-division').children().length != 1) {
					$('#desired-division')
				    .find('option')
				    .remove()
				    .end()
				    .append('<option value="1">Division I</option>')
				    .val('1');
				}
			}
		}

		//This function calculates and updates the price depending on which options the user selects
		function updatePrice() {
			switch($('#current-league').val()) {
				case 'bronze':
					currentValue = 30;
					var div = 5-parseInt($('#current-division').val());
					currentValue += div*18;
					break;
				case 'silver':
					currentValue = 133;
					var div = 5-parseInt($('#current-division').val());
					currentValue += div*22;
					break;
				case 'gold':
					currentValue = 238;
					var div = 5-parseInt($('#current-division').val());
					currentValue += div*37;
					break;
				case 'platinum':
					currentValue = 423;
					var div = 5-parseInt($('#current-division').val());
					currentValue += div*64;
					break;
				case 'diamond':
					currentValue = 743;
					var div = 5-parseInt($('#current-division').val());
					currentValue += div*173;
					break;
				case 'master':
					currentValue = 1608;
					break;
			}
			switch($('#desired-league').val()) {
				case 'bronze':
					desiredValue = 30;
					var div = 5-parseInt($('#desired-division').val());
					desiredValue += div*18;
					break;
				case 'silver':
					desiredValue = 133;
					var div = 5-parseInt($('#desired-division').val());
					desiredValue += div*22;
					break;
				case 'gold':
					desiredValue = 238;
					var div = 5-parseInt($('#desired-division').val());
					desiredValue += div*37;
					break;
				case 'platinum':
					desiredValue = 423;
					var div = 5-parseInt($('#desired-division').val());
					desiredValue += div*64;
					break;
				case 'diamond':
					desiredValue = 743;
					var div = 5-parseInt($('#desired-division').val());
					desiredValue += div*173;
					break;
				case 'master':
					desiredValue = 1608;
					break;
				case 'challenger':
					desiredValue = 2832;
					break;
			}
			var price = desiredValue-currentValue;
			var buttonText = "";
			if(price<=0) {
				price = "Your desired your rank must be higher than your starting rank.";
				var buttonText = '<button type="button" class="custom-button">Checkout</button>';
			}
			else {
				price = "$"+price;
				var buttonText = '<input type="submit" class="custom-button" value="Checkout">';
			}
			$('#amount').text(price);
			$('#checkout').empty();
			$(buttonText).appendTo($('#checkout'));
	        $('#inputPrice').attr('value',price);
		}

		function updateImage(current, league) {
			if(current=="current") {
			    switch(league) {
			    	case 'bronze':
				        $('#current-image').attr('src','resources/bronze.png');
				        break;
			    	case 'silver':
				        $('#current-image').attr('src','resources/silver.png');
				        break;
			    	case 'gold':
				        $('#current-image').attr('src','resources/gold.png');
				        break;
			    	case 'platinum':
				        $('#current-image').attr('src','resources/platinum.png');
				        break;
			    	case 'diamond':
				        $('#current-image').attr('src','resources/diamond.png');
				        break;
			    	case 'master':
				        $('#current-image').attr('src','resources/master.png');
				        break;
				}
			}
			else if(current=="desired") {
			    switch(league) {
			    	case 'bronze':
				        $('#desired-image').attr('src','resources/bronze.png');
				        break;
			    	case 'silver':
				        $('#desired-image').attr('src','resources/silver.png');
				        break;
			    	case 'gold':
				        $('#desired-image').attr('src','resources/gold.png');
				        break;
			    	case 'platinum':
				        $('#desired-image').attr('src','resources/platinum.png');
				        break;
			    	case 'diamond':
				        $('#desired-image').attr('src','resources/diamond.png');
				        break;
			    	case 'master':
				        $('#desired-image').attr('src','resources/master.png');
				        break;
			    	case 'challenger':
				        $('#desired-image').attr('src','resources/challenger.png');
				        break;
				}
			}
		}
		$(document).ready(function() {
			updateImage('current',$(this).val());
			updateImage('desired',$(this).val());
			updatePrice();
			//Change image and select options to match league
			$('#current-league').change(function() {
			    updateDivision('current', $(this).val());
				updateImage('current',$(this).val());
			    updatePrice();
			});
			$('#desired-league').change(function() {
			    updateDivision('desired', $(this).val());
				updateImage('desired',$(this).val());
			    updatePrice();
			});
			$('#current-division').change(function() {
				updatePrice();
			});
			$('#desired-division').change(function() {
				updatePrice();
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
			<h1>Boost now</h1>
			<h2>Play at an entirely different level</h2>
		</div>
		
		<!-- Main Content of the page -->
		<div class="content">
		
			<!-- Purchase Boost header-->
			<h1 class="body-header text-shadow">Purchase Boost</h1>
			<!-- Instructions -->
			<div class="body-content">
				<b><h2> How to order </h2></b>
				<ol class="instructions">
					<li> Choose your Current league, server and desired league. </li>
					<li> Click "Checkout"—you will  be redirected to create an Elo Boost account which will be used to track your order.</li>
					<li> After creating an account, you will be redirected to PayPal to confirm your payment. After creating your
						 account and placing your order, you will recieve order updates through email. </li>
					<li> You're done. Enjoy the Boost! </li>
				</ol>
			</div>
			
			<!-- Purchase form -->

			<form class="boost-form-container" action="register_page.php" method="POST">

				<h3> Select your current server: </h3>
				<select name="region" id="region" class="form-control region-width">
					<option selected value="NA">North America</option>
					<option value="EUW">EU West</option>
					<option value="EUNE">EU Nordic/East</option>
					<option value="OCE">Oceania</option>
					<option value="LAN">Latin America</option>
				</select>  

				<div class="form-group">

					<div class="current-league">
						<h3> Select your current league: </h3>
						<img class="current-image" id="current-image" src="resources/bronze.png">
						<br>
						<select id="current-league" class="form-control" name="currentLeague">
							<option selected value="bronze">Bronze</option>
							<option value="silver">Silver</option>
							<option value="gold">Gold</option>
							<option value="platinum">Platinum</option>
							<option value="diamond">Diamond</option>
							<option value="master">Master</option>
						</select>
						<select id="current-division" class="form-control" name="currentDivision">
							<option value="1">Division I</option>
							<option value="2">Division II</option>
							<option value="3">Division III</option>
							<option value="4">Division IV</option>
							<option selected value="5">Division V</option>
						</select>
					</div>
					
					<div class="desired-league">
						<h3> Select your desired league: </h3>
						<img class="desired-image" id="desired-image" src="resources/silver.png">
						<br>
						<select id="desired-league" class="form-control" name="desiredLeague">
							<option value="bronze">Bronze</option>
							<option selected value="silver">Silver</option>
							<option value="gold">Gold</option>
							<option value="platinum">Platinum</option>
							<option value="diamond">Diamond</option>
							<option value="master">Master</option>
							<option value="challenger">Challenger</option>
						</select> 
						<select id="desired-division" class="form-control" name="desiredDivision">
							<option value="1">Division I</option>
							<option value="2">Division II</option>
							<option value="3">Division III</option>
							<option value="4">Division IV</option>
							<option selected value="5">Division V</option>
						</select> 
					</div>
					<div id="price">
						<h2> Price: </h2>	
						<div class="price-shadow" id="amount"></div>
					</div>
					<input id="inputPrice" type="hidden" name="price" value="0">
				</div>
				<div class="center" id="checkout">
				</div>
			</form>
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