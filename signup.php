<?php
include 'connect.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$mob = $_POST['mobile'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$semester = $_POST['semester'];
$password = $_POST['password'];
if(!$connect) {
	die ("Connection Error");
	}
	echo "Connection Established!";
$query = "insert into users(fname,lname,dob,mobile,email,branch,semester,password) values 
('$fname','$lname','$dob','$mob','$email','$branch','$semester','$password')";
$result = mysqli_query($connect,$query);
if($result) 
{
	echo "Successfully Created the Account!";
	}
	
else {
	echo "Error :";
}
	
	
?>