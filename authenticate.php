<?php
ob_start();
session_start();
include "connect.php";

  if(isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password'])){
  	$username=$_POST['username'];
  	$password=$_POST['password'];
  	$query= mysqli_query($connect,"SELECT * FROM users where email= '$username' and password='$password' ");
  	$xx = mysqli_fetch_array($query);
	$id = $xx['id'];
  	$user = $xx['email'];
  	$pass=$xx['password'];
  	if($username==$user && $password==$pass){
  		$_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $username;
		 $_SESSION['id'] = $id;
          header("Location:quiz.php");
  	}
  	else
	echo "Invalid Credentials!!!";
  }
  ?>
