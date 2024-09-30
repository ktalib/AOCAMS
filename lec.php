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

		<div class="formcon">
<form class="form-group container" method="POST" action="lec-login.php">
<a href="index.html" class="btn btn-secondary mb-3">Back to Home</a>
  
<h2> Lecturer Login</h2>
  <br>
<label>Username</label>
<input type="text" name="uname" class="form-control">
<label>Password</label>
<input type="password" name="pass" class="form-control">
			<br>
<center><input type="submit" name="login" value="login" class="form-control" style="background-color: dodgerblue; color: white;"> </center>
</form>
</div>
        
</body>
</html>