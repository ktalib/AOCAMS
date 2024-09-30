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
		header("Location:index.php");
	}




?>

<!DOCTYPE html>
<html>
<head>
	<title>OCAMS</title>
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
		<div class="navvy"><?php include "good-nav2.php" ?></div>
		
		<div class="dataclass"><?php include "allocate.php"?></div>





		</body>
		</html>