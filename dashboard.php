<!DOCTYPE html>
<html lang = "eng">
<head>
  <title>Student Dashboard</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery-ui.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
    <style>
		/* CSS styles for the dashboard */
		.container {
			display: flex;
			flex-wrap: wrap;
		}
		.card {
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0,0,0,0.1);
			flex: 1 1 calc(33.33% - 20px);
			margin: 10px;
			padding: 20px;
			text-align: center;
		}
		.card h2 {
			margin-top: 0;
		}
		.btn {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 10px;
		}
		.btn:hover {
			background-color: #3e8e41;
		}
	</style>
	
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
</br>
</br>
</br>
  <h1>Welcome to your Dashboard</h1>
  <br>
  <br>
 
  <?php
  // Start session
  session_start();

  // Connect to database (replace 'database_name', 'username', and 'password' with your own)
  $conn = mysqli_connect('localhost', 'root', '', 'db_issm');
  
  ?>
  <br>
  <br>
  <br>
  
   <div class="container">
		<!-- Example cards for different sections of the dashboard -->
		
		<div class="card">
			<h2>Record Daily Progress</h2>
			<a href="success.php" class="btn">Daily Progress</a>
			<br>
			<br>
			<h2>Upload Final Report</h2>
		
			<a href="choose_file.php" class="btn">Upload Report</a>
		</div>
		
	</div>

</br>
</br>
 <button> <a href="logout.php">Logout</a></button>
  <br />
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

