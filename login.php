<?php
	session_start();
	include 'data_access_helper.php';
	include 'user.php';
	$db = new DataAccessHelper;
	$db->connect();
	$email = $_POST["email"];
	$pass =$_POST["pass"];
	//Kiem tra
	if($email == NULL || $pass == NULL){
		echo "<script>alert('Email or password is not invalid!')</script>";
		header('Location:login.html');
	}
	//check email exist
	$check = $db->executeQuery("SELECT count(name) FROM user WHERE email = '$email'");
	$row = mysqli_fetch_assoc($check);
	if($row['count(email)'] == 0){
			echo "<script>alert('Email is not exist. Please try again!')</script>";
			header('Location:login.html');
	}
	
	//check correct pass
	$check = $db->executeQuery("SELECT pass FROM user WHERE email = '$email'");
	$row = mysqli_fetch_assoc($check);
	if($pass != $row['pass']){
		echo "<script>alert('Mật khẩu bạn nhập bị sai!')</script>";
			header('Location:login.html');
	}
	else{
	$_SESSION['email'] = $email;
	echo "<script>alert('Bạn đã đăng nhập thành công')</script>";
	header('Location:index.php');
	}
	
?>