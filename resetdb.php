<?php

session_start();
$db = mysqli_connect('localhost', 'root', 'emmy', 'syndicates');
if ($db) {
	echo "database connection successfull";
} else {
	echo "could not connect to database";
}

if (isset($_POST[reset])) {
	$new = stripcslashes(mysqli_real_escape_string($db, $_POST['username']));
	$username = $_SESSION['username'];
}

$sql = "UPDATE hackers SET password='$new' WHERE username='$username'";
mysqli_query($db, $sql);

mysqli_close($db);

?>