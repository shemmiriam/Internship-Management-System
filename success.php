<!DOCTYPE html>

<html>
<head>
<br>
<br>
<title>Weekly Progress Form</title>


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
	<h1>Weekly Progress Form</h1>
	<br>
	<form method="post" action="submit_progress.php">
	<label for="reg_no">Registration Number:</label>
    <input type="text" name="reg_no" id="reg_no">
    <br>
		<label for="week">Week:</label>
		<select name="week" id="week">
			<option value="week1">Week 1</option>
			<option value="week2">Week 2</option>
			<option value="week3">Week 3</option>
			<option value="week4">Week 4</option>
			<option value="week5">Week 5</option>
			<option value="week6">Week 6</option>
			<option value="week7">Week 7</option>
			<option value="week8">Week 8</option>
			<option value="week9">Week 9</option>
			<option value="week10">Week 10</option>
			<option value="week11">Week 11</option>
			<option value="week12">Week 12</option>
			<option value="week13">Week 13</option>
			<option value="week14">Week 14</option>
			<option value="week15">Week 15</option>
			<option value="week16">Week 16</option>
			<option value="week17">Week 17</option>
			<option value="week18">Week 18</option>
			<option value="week19">Week 19</option>
			<option value="week20">Week 20</option>
			<option value="week21">Week 21</option>
			<option value="week22">Week 22</option>
			<option value="week23">Week 23</option>
			<option value="week24">Week 24</option>
			<option value="week25">Week 25</option>
			<option value="week26">Week 26</option>
			<option value="week27">Week 27</option>
			<option value="week28">Week 28</option>
			<option value="week29">Week 29</option>
			<option value="week30">Week 30</option>
		</select>
		<br>
		<br>
		<table style="border-collapse: collapse; width: 100%;">
  <thead>
    <tr style="border: 1px solid black;">
      <th style="border: 1px solid black; padding: 5px;">Day</th>
      <th style="border: 1px solid black; padding: 5px;">Date</th>
      <th style="border: 1px solid black; padding: 5px;">Description of Work</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $daysOfWeek = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
      for ($i = 0; $i < count($daysOfWeek); $i++) {
        echo "<tr style='border: 1px solid black;'>";
        echo "<td style='border: 1px solid black; padding: 5px;'>" . $daysOfWeek[$i] . "</td>";
        echo "<td style='border: 1px solid black; padding: 5px;'><input type='date' name='" . $daysOfWeek[$i] . "_date'></td>";
        echo "<td style='border: 1px solid black; padding: 5px;'><input type='text' name='" . $daysOfWeek[$i] . "_work_description'></td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>
        <br>
		<br>
		<input type="submit" value="Submit">
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
