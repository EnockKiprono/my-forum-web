<?php
/*starting session*/
session_start();
/*database connection*/

$db = mysqli_connect('localhost', 'root', 'emmy', 'syndicates') OR die('couldnt connect');

if ($db) {
	echo "database connection sucessfull";
} else {
	echo "sorry Enock try again";
}
/*declaring variables and checking if the button login is clicked*/

if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

/*validating from mysql database */

$sql = "SELECT * FROM hackers WHERE username='$username' AND password='$password'";
$results = mysqli_query($db, $sql);

$row = mysqli_num_rows($results)

if ($row == 1) {
	/*setting session and redirecting to the main page*/

$_SESSION['username'] = $username;
header('location: index.php');

}
}
?>