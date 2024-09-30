<?php include "conn.php";
session_start();
$okk = $_SESSION['us_id'];
$role =$_SESSION['role'];
$sql = "SELECT * FROM users WHERE us_id = '{$okk}' ";
$query = mysqli_query($conn,$sql);
	if(mysqli_num_rows($query)>0){
		$row = mysqli_fetch_assoc($query);
			//echo ($row['token']);

	}else{
		header("Location:index1.php");
	}

	if (isset($_POST['reset'])) {
		$sql="update course set lecturer='Not Assigned'";
			$result=mysqli_query($conn,$sql);
			if ($result) {
				header('location:dashboard.php');
			}

	}

	if (isset($_POST['auto'])) {

$show="select* from staff";
	$results=mysqli_query($conn,$show);
	while ($row=$results->fetch_assoc()) {
		$lec= $row['fname'];
	



		$sql="update course set lecturer=array('$lec')";

$result=mysqli_query($conn,$sql);
			if ($result) {
				header('location:dashboard.php');
			}

	}}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
 <meta charset="UTF-8"> 
        

</head>
<body>
		<?php include "nav.php" ?>
<br>
		<div class="navvy"><?php include "good-nav.php" ?>
		<?php if ($role == 1) {  ?>

			<form method="post" action="">
		<button class="btn btn-warning" id="dataclass2" role="button" name="auto">Auto Allocate</button><?php }  ?></div>
						</form>	

		<div class="navvs">
		<?php if ($role == 1) {  ?>

			<form method="post" action="">
		<button class="btn btn-info" id="dataclass2" role="button" name="reset">Reset</button><?php }  ?></div>
						</form>		
							<div class="naz">
						<a href="print.php"><button class="btn btn-primary " id="dataclass2" role="button">Print Allocation</button></a></div>

		<!-- <button id="dataclass3" onclick="myFunction()">Print Allocation</button> -->

<script>
function myFunction() {
  window.print();
}
</script>


		<?php if ($role == 1) {  ?><div class="dataclass"><?php include "plain.php"?></div><?php }  
				else if ($role == 2) {  ?><div class="dataclass"><?php include "allocate.php"?></div><?php }

		?>





		</body>
		</html>