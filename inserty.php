<html>
<body>
<?php
$conn = mysqli_connect("localhost","root","","db_issm");
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error());
  }
 
mysqli_select_db("db_issm", $conn);

 
$sql="INSERT INTO fill_details (company_name, first_name, last_name,email,gender,file)
VALUES
( '$_POST[company_name]','$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[gender]','$_POST[file]')";
 
if (!mysqli_query($sql,$conn))
  {
  die('Error: ' . mysqli_error());
  }
header('location:file_uploading/index.php');
 
mysqli_close($conn)
?>
</body>
</html>
 