<?php
	// Error Reporting Turn On
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	// Setting up the time zone
	date_default_timezone_set('Asia/Dhaka');

	// Host Name
	$dbhost = 'sdb-59.hosting.stackcp.net';

	// Database Name
	$dbname = 'street-life-africa-35303233c860';

	// Database Username
	$dbuser = 'streetlifeafrica';

	// Database Password
	$dbpass = 'tBvwpc||JL$N';

	// Defining base url
	// define("BASE_URL", "http://localhost/streetlife-africa");

	try {
		$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch( PDOException $ex ) {
		echo "Connection error :" . $ex->getMessage();
	}
?>