
<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_issm";

$conn = mysqli_connect('localhost','root','','db_issm');   

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO files (weekly, final)
VALUES
( '$_POST[file1]','$_POST[file]')";


// Prepare SQL statement to insert data into the table
$sql = "INSERT INTO work_schedule (reg_no,day_of_week, date, work_description) VALUES (?,?,?, ?)";

// Prepare the statement and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $reg_no, $dayOfWeek, $date, $workDescription);
$reg_no = $_POST['reg_no'];
// Loop through the days of the week and insert the data into the database
$daysOfWeek = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
foreach ($daysOfWeek as $dayOfWeek) {
  $date = $_POST[$dayOfWeek . '_date'];
  $workDescription = $_POST[$dayOfWeek . '_work_description'];
  $stmt->execute();
   
}

// Close the statement and database connection
$stmt->close();

$conn->close();
// If successful, redirect to the logout page
header("Location: finished.php");
exit();
?>
