<?php
	session_start();
	include 'data_access_helper.php';
	include 'user.php';
	$db = new DataAccessHelper;
	$db->connect();
	$email =$_POST["email"];
	$pass =$_POST["pass"];
	//Kiem tra
	if($mail == NULL || $pass == NULL){
		echo "<script>alert('Email or password is not invalid!')</script>";
		header('Location:login.html');
	}
	//check email exist (mỗi email là 1 tài khoản.)
	$check = $db->executeQuery("SELECT count(email) FROM user WHERE email = '$email'");
	$row = mysqli_fetch_assoc($check);
	if($row['count(email)'] == 0){
			echo "<script>alert('Email is not exist. Please try again!')</script>";
			header('Location:login.html');
	}
	
	//check correct password
	$check = $db->executeQuery("SELECT pass FROM user WHERE email = '$email'");
	$row = mysqli_fetch_assoc($check);
	if($pass != $row['pass']){
		echo "<script>alert('Password is wrong, please try again!')</script>";
			header('Location:login.html');
	}
	else{
	$_SESSION['email'] = $email;
	echo "<script>alert('You log in success')</script>";
	header('Location:index.php');
	}
	
?>