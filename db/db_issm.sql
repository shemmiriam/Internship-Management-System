
$Servername="localhost";
$username="root";
$password="";
$dbname="db_issm";

--create connection

$conn=new mysqli($Servername,$username,$password,$dbname,);

--check connection

if ($conn->connect_error){
  die("connection failed:".$conn->connect_error);
}
--get user input

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$RegistrationNumber=$_POST['RegistrationNumber'];
$password=$_POST['password'];
$email=$_POST['email'];
$Gender=$_POST['Gender'];
$username=$_POST['username'];
$title=$_POST['title'];
$description=$_POST['description'];
$start=$_POST['start'];
$end=$_POST['end'];
$month=$_POST['month'];
$year=$_POST['year'];
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$company_name=$_POST['company_name'];
$cv=$_POST['cv'];
$file=$_POST['file'];
$id=$_POST['id'];
$student_id=$_POST['student_id'];
$middlename=$_POST['middlename'];
$section=$_POST['section'];
$photo=$_POST['photo'];
--prepare SQL query

$stmt=$conn->prepare("INSERT INTO registered_users (first_name,last_name,RegistrationNumber,password,email,gender) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss",$FirstName,$LastName,$RegistrationNumber,$password,$email,$Gender);

$stmt=$conn->prepare("INSERT INTO log_in (username,password) VALUES (?,?)")
$stmt->bind_param("ss",$username,$password);

$stmt=$conn->prepare("INSERT INTO activity (title,description,start,end,month,year) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss",$title,$description,$start,$end,$month,$year);

$stmt=$conn->prepare("INSERT INTO admin(username,password,name ) VALUES (?,?,?)");
$stmt->bind_param("sss",$username,$password,$name);

$stmt=$conn->prepare("INSERT INTO aplicants(first_name,last_name,age,address,email,company_name,cv,gender ) VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssss",$first_name,$last_name,$age,$address,$email,$company_name,$cv,$gender);

$stmt=$conn->prepare("INSERT INTO fill_details(company_name,first_name,last_name,email,gender,file) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("ssssss",$company_name,$first_name,$last_name,$email,$gender,$file);

$stmt=$conn->prepare("INSERT INTO student(id,student_id,firstname,middlename,lastname,year,section,photo) VALUES (?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssss",$id,$student_id,$firstname,$middlename,$lastname,$year,$section,$photo);

--execute query
if ($stmt->execute()===TRUE){
   echo "Data saved successfully.";
}
else{
  echo "Error: ".$stmt->error;
}

--close statement and connection
$stmt->close();
$conn->close();

