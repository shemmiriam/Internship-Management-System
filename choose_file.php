<!DOCTYPE html>
<html lang = "eng">
<head>
  <title>choose file</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
        </head>
<body>
<nav class = "navbar navbar-default navbar-fixed-top">
	<div class = "container-fluid">
		<a class="navbar-brand" href="#">
			<img src="images/logo1.png" width="30" height="30" alt="">
		</a>
		<a href="index.php" class = "navbar-brand">Attachment</a>
	<div>
</nav>
<br>
<br>
<br>
<br>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="fileToUpload">
    <br>
<br>
<br>
<br>
    <input type="submit" value="Upload" id="">
</form>
<br />
	<br />
	<nav class = "navbar-default" id = "footer">
		<label class = "navbar-brand pull-right">&copy;Attachment portal management system<?php echo date('Y', strtotime('+8 HOURS'))?></label>
		<label class = "navbar-brand ">Attachment</label>
	</nav>
</body>
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/sidebar.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/jquery.dataTables.min.js"></script>
<script src = "js/script.js"></script>
<script type = "text/javascript"></script>
</html>
