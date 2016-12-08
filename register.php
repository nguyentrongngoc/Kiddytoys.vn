<?php

	include 'data_access_helper.php';
	$db = new DataAccessHelper;
	$db->connect();
	//lay thong tin dang ki khach hang
	$name = $_POST["name"];
	$pass = $_POST["pass"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	//để so sánh vs pass, viết thêm hàm kiểm tra điều kiện. Nhưng viết php lâu, k tối ưu web? nên dùng javascrip.Nếu dùng thì bỏ ở trang register.html?chèn javascrip vào đó?
		
	//kiem tra thong tin, cũng nên dùng javascrip. Mấy bước kiểm tra lỗi cú pháp lỗi nhập, không tương tác vs csdl.
	if(isset($_POST['submit'])){
		if($name == NULL || $phone == NULL || $email == NULL  ||$pass == NULL){
			echo "Bạn Cần Nhập Đầy Đủ Dữ Liệu Vào";
			header('Location:register.html');
	}}
	//Kiem tra trung lap du lieu
	$check = $db->executeQuery("SELECT count(name) FROM user WHERE name = '$name'");
	$row = mysqli_fetch_assoc($check);
	if($row['count(name)'] > 0){
			echo "<script> alert('This account has already created!');</script>";
			header('Location:register.html');
	}
	
	//kiem tra email
	if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)){
        echo "Email is not Invalid. Please fill other email. <a href='javascript: history.go(-1)'>Go back</a>";
        header('Location:register.html');
    }
	//Kiểm tra phone đã có người dùng chưa
	$check = $db->executeQuery("SELECT count(phone) FROM user WHERE phone='$phone'");
	$row = mysqli_fetch_assoc($check);
    if($row['count(phone)'] > 0){
        echo "Phone has already created. Please fill other phone <a href='javascript: history.go(-1)'>Go back</a>";
        header('Location:register.html');
    }
	
	//Kiểm tra email đã có người dùng chưa
	$check = $db->executeQuery("SELECT count(email) FROM user WHERE email='$email'");
	$row = mysqli_fetch_assoc($check);
    if($row['count(email)'] > 0){
        echo "Email has already created. Please fill other email <a href='javascript: history.go(-1)'>Go back</a>";
        header('Location:register.html');
    }

		
		$db->executeQuery("INSERT INTO user(name, pass, phone, email) values ('$name','$pass','$phone','$email')");
		$db->close();
		return require("index.html");

?>
