<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>successful</title>
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
			<img class = "pull-left" src="images/logo.jpg" width="50" height="50" alt="logo">
		<a href="index.php" class = "navbar-brand">Attachment</a>
	<div>
</nav>
<br />
<br />
<br />
    <h1>Congratulations.You have successfully filled your  progress report!!<h1>
    <h2>You can logout below now.</h2>
<br>
<br>
<form method="post" action="logout.php" role="logout">
    <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block"  >Log out</button>
</form>
    <br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<nav class = "navbar-default" id = "footer">
		<label class = "navbar-brand pull-right">&copy;Attachment portal management system<?php echo date('Y', strtotime('+8 HOURS'))?></label>
		<label class = "navbar-brand ">Attachment</label>
	</nav>
</body>
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/script.js"></script>
<script src = "js/bootstrap.js"></script>
<script src = "js/jquery.dataTables.min.js"></script>
</html>