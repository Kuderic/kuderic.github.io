<?php
$servername = 'localhost';
$username = 'root';
$password = '';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

$dbname = 'eloboosters';

// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql) === TRUE) {
    //echo "Database created successfully";
} else {
    //echo "Error creating database: " . $conn->error;
}

mysqli_select_db($conn, $dbname) or die(mysql_error());

$sql = "
CREATE TABLE IF NOT EXISTS `accounts` (
  `EBusername` varchar(30) NOT NULL,
  `EBemail` varchar(30) NOT NULL,
  `EBpassword` varchar(30) NOT NULL,
  `LOLusername` varchar(30) NOT NULL,
  `LOLsummoner` varchar(30) NOT NULL,
  `LOLpassword` varchar(30) NOT NULL,
  PRIMARY KEY (`EBusername`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;";
if (mysqli_query($conn, $sql)) {
	//echo "<br>heckin good table make";
}
else {
	echo "<br>Error creating table: ".mysqli_error($conn);
}

$sql = "
CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` varchar(200) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `startLeague` varchar(200) DEFAULT NULL,
  `startDivision` varchar(200) DEFAULT NULL,
  `endLeague` varchar(200) DEFAULT NULL,
  `endDivision` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;";
if (mysqli_query($conn, $sql)) {
  //echo "<br>heckin good table make";
}
else {
  //echo "<br>Error creating table: ".mysqli_error($conn);
}


//Check if table has entries
$sql = "SELECT * FROM accounts";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    //echo "<p>table values exist</p>";
} else {
}
?>