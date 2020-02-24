<?php
function pendaftaran ($data) {
	global $conn;
	$username = $data (strtolower(stripslashes["username"]));
	$nim	= $data ["nim"];
	$password = $mysqli_real_escape_string($conn, $data ["password"]);	
	// ENGKRIPSI PASSWORD
    $password = password_hash ($password, PASSWORD_DEFAULT);
    return false;
}
?>