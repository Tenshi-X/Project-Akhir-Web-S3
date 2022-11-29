<?php  
	$hostname	= "localhost";
	$username	= "root";
	$password	= "";
	$database	= "katering";

	$koneksi	= new mysqli($hostname, $username, $password, $database);

	if ($koneksi->connect_error) {
		die("Error: ".$koneksi->connect_error);
	}
