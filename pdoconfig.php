<?php
    $host = 'localhost:3307';
    $dbname = 'db_konek';
    $username = 'root';
    $password = '';
	
	try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
	} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
	}
    ?>
    