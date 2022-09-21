<?php
session_start();

if (isset($_FILES['image'])) {
	$errors = array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

$file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

$expensions = array("jpeg", "jpg", "png", "mp4");

if (in_array($file_ext, $expensions) === false) {
	$errors[] = "extension not allowed, please choose a jpg, png or jpeg file.";
}

if (empty($errors) == true) {
	move_uploaded_file($file_tmp, "images/".$file_name);
	echo "succsessfully uploaded file";

session_start();
$db = mysqli_connect('localhost', 'root', 'emmy', 'syndicates');
$sql = "INSERT INTO images (file_name, file_size, file_type, file_tmp, date) VALUES ('$file_name', '$file_size', '$file_type', '$file_tmp', NOW())" or die('could not insert');
	$result = mysqli_query($db, $sql);
} else {
	print_r($errors);
}
}

echo '"<p>".$file_name."</p>"';
echo "<br>";
?>