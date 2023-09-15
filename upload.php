<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_issm');
if(!$conn) {
    die("Connection failed:".mysqli_connect_error());
}
$file=$_FILES['fileToUpload']['tmp_name'];
$file_name=$_FILES['fileToUpload']['name'];
$file_type=$_FILES['fileToUpload']['type'];
$file_size=$_FILES['fileToUpload']['size'];
$file_content=file_get_contents($file);
$sql="INSERT INTO final_report(name,type,size,content) VALUES (?,?,?,?)";
$stmt=mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"ssis",$file_name,$file_type,$file_size,$file_content);
mysqli_stmt_execute($stmt);
mysqli_close($conn);
header("Location: finished.php");
exit();
?>