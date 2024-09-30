<?php include "conn.php";
header("Location:dashboard.php");
if (isset($_POST['save'])){
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$title = $_POST['title'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$area1 = $_POST['area1'];
	
	
	



$sql = "INSERT INTO staff(uname,pass,title,lname,fname,area1) VALUES ('{$uname}','{$pass}','{$title}', '{$lname}', '{$fname}', '{$area1}') ";

$finish = mysqli_query($conn,$sql);
if ($finish){
 	
		echo "Staff Has Been Registered Successfully";

	}else{
		echo "Registration Not Successful";

}
}

?>