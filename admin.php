<!DOCTYPE html>
<html>
<head>
	<title>techies admin panel</title>
	<link rel="stylesheet" type="text/css" href="techies.css">
	<script type="text/javascript" src="techies.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" width=device-width initial-scale=1.0>
</head>
<body style="text-align: center; background-color: cyan;">
<img src="techies.png" style="width: 50px; height: 50px; border: solid; border-radius: 50px;"><h1><b><em>TECHIES ADMIN PANEL</em></b></h1>

<div class="files">
	<form method="post" action="upload.php" enctype="multipart/form-data">
		<label for="image">upload image</label>
		<input type="file" name="image" required>
		<input type="submit" name="upload" value="upload">
	</form>
</div>
</body>
</html>