<?php

session_start();
$db = mysqli_connect('localhost', 'root', 'emmy', 'syndicates');
if ($db) {
	echo "database connection successfull";
} else {
	echo "could not connect to database";
}

if (isset($_POST['register'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
			$password = mysqli_real_escape_string($db, $_POST['password']);
}

$password = md5($password);

$sql = "INSERT INTO hackers (username, email, password, date) VALUES ('$username', '$email', '$password', NOW())";
$results = mysqli_query($db, $sql);

if ($results) {
	$_SESSION['username'] = $username;
	header('location: index.php');
}

mysqli_close($db);
?>