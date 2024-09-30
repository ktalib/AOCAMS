<?php
session_start();
$okk = $_SESSION['sc_id'];
$role =$_SESSION['role'];
$title = $_SESSION['title'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];


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
		<div class="navvy"><?php include "good-nav.php" ?></div>
		<button class="btn btn-primary" id="dataclass2" onclick="myFunction()" role="button">Print Allocation</button>

		<!-- <button id="dataclass3" onclick="myFunction()">Print Allocation</button> -->

<script>
function myFunction() {
  window.print();
}
</script>
<a class="btn btn-primary" id="dataclass3" href="alloc.php" role="button">Refresh</a>
		<div class="dataclass"><?php include "tabs.php"?></div>





		</body>
		</html>