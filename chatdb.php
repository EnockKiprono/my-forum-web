<?php

session_start();
$db = mysqli_connect('localhost', 'root', 'emmy', 'syndicates');
if ($db) {
	echo "database connection successfull";
} else {
	echo "could not connect to database";
}

if (isset($_POST['post'])) {
	$username = $_SESSION['username'];
		$chat = mysqli_real_escape_string($db, $_POST['chat']);
}

$sql = "INSERT INTO chats (username, chat, date) VALUES ('$username', '$chat', NOW())";
$results = mysqli_query($db, $sql);
header('location: chat.php');
mysqli_close($db);
	?>