<?php 
		session_start(); 
		unset($_SESSION['email']);
		header('Location: login.html');
		echo "<script> alert('Bạn đã đăng xuất thành công');</script>";
?>
