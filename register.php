<?php
	include 'data_access_helper.php';
	$db = new DataAccessHelper;
	$db->connect();
	//lay thong tin khach hang
	$name = $_POST["name"];
	$pass =$_POST["pass"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$fail = 0;
	//kiem tra thong tin
	if(isset($_POST['submit'])){
		if($name == NULL || $phone == NULL || $email == NULL  ||$pass == NULL){
			echo "<script> alert('Data is null!');</script>";
			$fail = 1;
		}
	}
	//Kiem tra trung lap du lieu
	// $check = $db->executeQuery("SELECT count(email) FROM user WHERE email = '$email'");
	// $row = mysqli_fetch_assoc($check);
	// if($row['count(email)'] > 0){
	// 		echo "<script> alert('This account has already created!');</script>";
	// 		$fail = 1;
	// }
	
	//kiem tra email
	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $email)){
        echo "<script> alert('Email is not Invalid. Please fill other email');</script>";
		$fail = 1;
    }
	//Kiểm tra phone đã có người dùng chưa
	$check = $db->executeQuery("SELECT count(phone) FROM user WHERE phone='$phone'");
	$row = mysqli_fetch_assoc($check);
    if($row['count(phone)'] > 0){
        echo "<script> alert('Phone has already created. Please fill other phone');</script>";
		$fail = 1;
    }
	
	//Kiểm tra email đã có người dùng chưa
	$check = $db->executeQuery("SELECT count(email) FROM user WHERE email='$email'");
	$row = mysqli_fetch_assoc($check);
    if($row['count(email)'] > 0){
        echo "<script> alert('Email has already created. Please fill other email');</script>";
		$fail = 1;
    }
			if($fail == 0){
				$db->executeQuery("INSERT INTO user(name, pass, phone, email) values ('$name','$pass','$phone','$email')");
				$db->close();
				 echo "<script> alert('Bạn đã đăng kí thành công');</script>";
				require('login.html');
				
			}
			else{
				$db->close();
				 echo "<script> alert('Đăng kí thất bại');</script>";
				require('register.html');
			}
?>