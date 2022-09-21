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
	<title>Hacking syndicates</title>
	<link rel="stylesheet" type="text/css" href="syndicates.css">
	<script type="text/javascript" src="syndicates.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" width=device-width initial-scale=1.0>
</head>
<body style="text-align: center; background-color: cyan;">
<img src="techies.png" style="width: 30px; height: 30px; border: solid; border-radius: 50px; float: left;">
<h1 style="color: red;"><b><em>HACKING SYNDICATES</em></b></h1>
<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a href="chat.php">live chat</a>
	<a href="web.php">exploits</a>
	<a href="network.php">Tutorials</a>
	<a href="crypto.php">Buy data</a>
	<a href="technews.php">Tech News</a>
	<a href="contact.php">Contact us</a>
	<a href="logout.php" style="border: solid; border-radius: 10px; padding: 10px; margin: 10px; background-color: red;">Logout</a>
</div>
<div>
	<span style="font-size: 30px; cursor: pointer;" onclick="openNav()">
		<div class="menu"></div>
		<div class="menu"></div>
		<div class="menu"></div>
	</span>
</div>
<div style="float: right; margin: 15px;">
<a href="login.php" style="border: solid; border-radius: 10px; padding: 10px; margin: 10px; background-color: green; text-decoration: none;">Login</a>
<a href="subscribe.php" style="border: solid; border-radius: 10px; padding: 10px; margin: 10px; background-color: green; text-decoration: none;">Subscribe</a>
</div><br>
<p style="color: green; float: left;" name="p">Welcome:<?php echo $_SESSION['username']; ?></p><br>
<div style="border: solid; border-radius: 10px; padding: 10px; color: blue; background-color: yellow; margin-top: 15px;">
	<p><em>Welcome to underwater hacking syndicates. We share knowledge, make money and spread goodness.</em></p>
</div>
<footer style="text-decoration: none; color: grey; margin-top: 15px;">
	<a href="contact.php" style="text-decoration: none; color: grey;">Contact us</a> | <a href="help.php" style="text-decoration: none; color: grey;">Help</a> | <a href="about.php" style="text-decoration: none; color: grey;">About us</a><br>
<p>@syndicates2022</p>
</footer>
</body>
</html>