<?php
ob_start();
session_start();
error_reporting(0);
include("conn.php");
if(isset($_POST['login'])){
	$user_name	=	$_POST['uname'];
	$p_word	=	$_POST['pass'];
	if(empty($user_name)){
		header('location:admin.php?name_err=err');
	}else if(empty($p_word)){
		header('location:admin.php?p_err=p');
	}else{
		$query	=	"SELECT * 
					FROM admin_tbl 
					WHERE uname='$user_name' AND pass = '{$p_word}'";
					
		$user_query	=	mysqli_query($conn, $query);
		if(!$user_query){
			header('location:dashboard.php?ok=0');
			//echo"Users Query Problem: ".mysqli_error();
		}else{
			$nu_row	=	mysqli_num_rows($user_query);
			if($nu_row>0){
				$data	=	mysqli_fetch_assoc($user_query);
				$dbu=$data['uname'];
				$dbp=$data['pass'];
				$dbi=$data['a_id'];



				
				if(($dbu==$user_name) && ($dbp==$p_word)){
					$_SESSION['uname']=$dbu;
					$_SESSION['pass']=$dbp;
					$_SESSION['a_id']=$dbi;
					


					header('Location:dashboard.php');
				}
				
			}
		}
		
		
		
	}
}
?>

<html>
<head>
	<title> </title>
	<link rel="stylesheet" type="text/css" href="css/log_css.css" media="All" />
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/navstyle.css">
	<script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="wrapper">
		English
		<div id="content">
		<h3>PASSWORD AND SECURITY</h3>
		<div id="content">
			<div class="alert alert-danger" role="alert">
  Incorrect Password or Username!
  <---- <a href="index1.php">Go Back</a>
			<!-- Please Log In and Use The Service!
			<div id="input_wrapp">
				<div id="input">
					<form action="" name="" method="POST">
					<span style="color:red"><?php 
								if(isset($_GET['ok']) && $_GET['ok'] = 'o'){
									?>Users Query Problem<?php
								}else if(isset($_GET['oka']) && $_GET['oka'] = 'oa'){
									?>Users Query OK<?php
								}
							?>
					</span>	
						<div class="sub"> 
							<label for="user_name" class="fixedwidth">User Name:</label>
							<input type="text" name="user_name" placeholder="InPut Your User Name"  value="<?php echo $user_name; ?>" />
							</br><span style="color:red">
							<?php 
								if(isset($_GET['name_err']) && $_GET['name_err'] = 'err'){
									?>User Name cannot be empty<?php
								} 
							?>							
						</span>
						</div>
						<div class="sub"> 
							<label for="p_word" class="fixedwidth">Password:</label>
							<input type="password" name="p_word" placeholder="InPut Your Password" />
							</br><span style="color:red">
							<?php 
								if(isset($_GET['p_err']) && $_GET['p_err'] = 'p'){
									?>Password cannot be empty<?php
								} 
							?>							
						</span>
						</div>
						<div class="sub"> 
							<input type="submit" name="submit" value="LOG IN" />
						</div>
						<a href="">I Forgot Password</a></br>
					</form>
				</div>
				<div id="logo">

				</div>
			</div> -->
			<!--Powered  By AllStarsTech & Logistics!-->
		</div >
	</div>
</body>
<html>