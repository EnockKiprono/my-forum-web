<?php

session_start();

if (! isset($_SESSION['username'])) {
	echo "please register or login first";
	header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>chatroom</title>
	<link rel="stylesheet" type="text/css" href="syndicates.css">
	<script type="text/javascript" src="syndicates.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" width=device-width initial-scale=1.0>
</head>
<body style="text-align: center; background-color: cyan; border: solid; border-radius: 20px; padding: 20px; margin: 10px; border-color: purple;">
	<h1 style="color: red;"><b>SYNDICATES CHATROOM</b></h1>
<div class="room" style="border: solid;
	border-spacing: 20px;
	width: 500px;
	height: 300px;
	background-color: green;
	float: center;
	margin: 20px;
	padding: 20px;
	margin-left: 200px;">
	<?php

session_start();
$db = mysqli_connect('localhost', 'root', 'emmy', 'syndicates');
$sql = "SELECT * FROM chats ORDER BY id DESC";
$results = mysqli_query($db, $sql);

echo '"<p>".$chat."</p>"';
	?>
</div>
<div class="fm" style="display: inline-block; padding: 0px; border: solid; text-align: center; border-radius: 10px; margin: 10px;">
	<form method="post" action="chatdb.php" enctype="multipart/form-data">
	<label style="color: green; float: center; margin-bottom: 30px;">Enter chat:</label><textarea name="chat" style="width: auto; height: auto; background-color: chocolate; border: solid; border-radius: 10px; margin-left: 10px; margin-top: 20px;"></textarea>
	<input type="submit" name="post" value="POST" style="border: solid; border-radius: 10px; padding: 10px; margin: 10px; background-color: yellow; color: green; margin-bottom: 20px;"><br>
	</form>
</div><br>
<a href="index.php" style="text-decoration: none; color: blue;">home</a>
<footer style="text-decoration: none; color: grey; margin-top: 15px;">
	<a href="contact.php" style="text-decoration: none; color: grey;">Contact us</a> | <a href="help.php" style="text-decoration: none; color: grey;">Help</a> | <a href="about.php" style="text-decoration: none; color: grey;">About us</a><br>
<p>@syndicates2022</p>
</footer>
</body>
</html>