<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = new mysqli($servername, $username, $password);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$q1="CREATE DATABASE IF NOT EXISTS HOSTEL";
$con->query($q1);
$con->close();
$database="HOSTEL";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
  die("connection failed:". $conn->connect_error);
}
$SName=$_POST['firstname'];
$FName=$_POST['fathersname'];
$Foccupation=$_POST['fatheroccupation'];
$MNo=$_POST['Mobile'];
$email=$_POST["Email"];
$branch=$_POST['branch'];
$Paddress=$_POST['peraddress'];
$taddress=$_POST['address'];
$country=$_POST['Country'];
$block=$_POST['blockname'];
$value=$_POST['block'];
$q2="CREATE TABLE IF NOT EXISTS girls(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
student_name VARCHAR(60),
fathers_name VARCHAR(60),
fathers_occupation VARCHAR(60),
mobile_no VARCHAR(60),
email VARCHAR(60),
branch VARCHAR(60),
per_address VARCHAR(60),
cur_address VARCHAR(60),
country VARCHAR(60),
hostel_block VARCHAR(60),
block VARCHAR(60)
)";
if($conn->query($q2)==TRUE)
{
}
else{
  echo $conn->error;
}
$q3="INSERT INTO girls(student_name,fathers_name,fathers_occupation,mobile_no,email,branch,per_address,cur_address,country,hostel_block,block) VALUES ('$SName','$FName','$Foccupation','$MNo','$email','$branch','$Paddress','$taddress','$country','$block','$value')";
if($conn->query($q3)==true)
{
}
else{
  $conn->error;
}
$conn->close();

?>
<h1> "Your responnse will be encrypted and saved to a secure location"</h1>
s
<script>
 setTimeout(function(){location.href='girls.html'},5000);
 </script>
