<?php
/*
require('config.php');

//Start session if not started already
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function usernameExists($conn)
{
	$sql = "SELECT * FROM accounts WHERE EBusername='".$_POST["EBusername"]."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	if ($result->num_rows > 0) {
		return 1;
	}
	else {
		return 0;
	}
}-

$nameExists = usernameExists($conn);
$accountCreated = 0;

if($nameExists == 0) {
	$sql = "INSERT INTO accounts (EBusername, EBemail, EBpassword, LOLusername, LOLsummoner, LOLpassword)
		VALUES ('".$_POST['EBusername']."','".$_POST['EBemail']."','".$_POST['EBpassword']."','".$_POST['LOLusername']."','".$_POST['LOLsummoner']."','".$_POST['LOLpassword']."')";	
	if ($conn->query($sql) === TRUE) {
		$accountCreated = 1;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
*/
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		require "head.php";
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
			<?php
				$accountCreated = 1;
				if($accountCreated == 1) {
					echo "<h1>Account Created</h1>";
					echo "<h2>A confirmation email has been sent</h2>";
				}
				else if($nameExists == 1){
					echo "<h1>Account not created</h1>";
					echo "<h2>Username already in use</h2>";
				}
			?>
		</div>
		
		<!-- Main Content of the page -->
		<div class="content">
		
			<!-- create page conditionals-->
			<?php
				if($accountCreated == 1) {
					echo "<h1 class='body-header text-shadow'>Review your order:</h1>";
					$currentRank = ucwords($_SESSION['ORDER']['currentLeague']).' '.$_SESSION['ORDER']['currentDivision'];
					$desiredRank = ucwords($_SESSION['ORDER']['desiredLeague']).' '.$_SESSION['ORDER']['desiredDivision'];
					$price = $_SESSION['ORDER']['price'];
					echo '
						<div class="body-content center">

							<p> Review your Elo boost order before paying </p>

							Current rank: '.$currentRank.' <br>
							Desired rank: '.$desiredRank.' <br>
							Price: '.$price.'
							<br>
							<a class="custom-button" href="https://www.paypal.com/signin?country.x=US&locale.x=en_US">Pay Now</a>
							<p> Note: I do not have a PayPal account, so I couldn\'t get this to actually work.</p>
						</div>
						';
				}
				else if($nameExists == 1){
					echo '<h1 class="body-header text-shadow">Register again</h1>

						<div class="body-content center">

							<a href="register_page.php">Click here to register again</a>

						</div>
						';
				}
			?>

		</div>
		<?php
			require('footer.php');
		?>
	</div>	
	
</body>
<html>