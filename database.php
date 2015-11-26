<?php
// connect to database and retrieve database object
try {
	$db = new PDO("mysql:host=localhost;dbname=shoutit;port=3306","root","");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}
 ?>
