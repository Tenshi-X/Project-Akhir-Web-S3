<?php  
	include 'connect.php';

	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$no_hp		= $_POST['no_hp'];
	$alamat		= $_POST['alamat'];

	$sql		= "INSERT INTO user VALUES ('','$username','$password','$no_hp','$alamat')";
	$query		= mysqli_query($koneksi, $sql);

	if ($query) {
		header("location: loginPage.php?message=register_success");
	} else {
		header("location: registerPage.php?message=register_fail");
	}
?>