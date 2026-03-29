<?php

	/*
	 * The Database File
	*/
// Database Server Name
$servername = "localhost";

// Database Username
$username = "u689360555_adsexhibition";

// Database password
$password = "qATsWC^3";


// Database Name
$dbname = "u689360555_AdsExhibition";


// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
//if(!$conn)
{
//	echo "<script> alert ('Database Error ');</script>";
}
// Create connection


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 
	
