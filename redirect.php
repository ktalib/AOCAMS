<?php include "conn.php";
session_start();
$ok = $_SESSION['us_id'];
$oky = $_SESSION['role'];

$sql = "SELECT * FROM users WHERE us_id = '{$ok}' ";
$query = mysqli_query($conn,$sql);
				if (mysqli_num_rows($query)>0){
		$row = mysqli_fetch_assoc($query);
			header("dashboard.php");	


	// if ($oky='1'){
	// 	header("dashboard.php");

		

	}else{
		header("Location:signin.php");
	}




?>