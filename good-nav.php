<?php include "conn.php";

include "try.php";
// header("Location:dashboard.php");
if (isset($_POST['save'])){
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$title = $_POST['title'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$area1 = $_POST['area1'];
  $email = $_POST['email'];
	
	
	
	



$sql = "INSERT INTO staff(uname,pass,title,lname,fname,area1,email) VALUES ('{$uname}','{$pass}','{$title}', '{$lname}', '{$fname}', '{$area1}','{$email}') ";

$finish = mysqli_query($conn,$sql);
if ($finish){
 	
		echo ("<script LANGUAGE='JavaScript'>
     window.alert('Successful!');
     window.location.href='lecturers.php';
    </script>");

	}else{
		echo "Registration Not Successful";

}
}


if (isset($_POST['save2'])){
	$code = $_POST['code'];
	$title2 = $_POST['title2'];
	$unit = $_POST['unit'];
	$scc = $_POST['scc'];
	$level = $_POST['level'];

  $l = $_POST['l'];
  $p = $_POST['p'];
  $ch = $_POST['ch'];
  $lab = $_POST['lab'];
	
	
	
	



$sql = "INSERT INTO course(code,title2,unit,sc_id,level,l,p,ch,lab) VALUES ('{$code}','{$title2}','{$unit}', '{$scc}', '{$level}','{$l}','{$p}','{$ch}','{$lab}') ";

$finish = mysqli_query($conn,$sql);
if ($finish){
 	
		echo "Course Has Been Registered Successfully";

	}else{
		echo "Course Registration Not Successful";

}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/navstyle.css">
	<!-- link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script> -->
 <meta charset="UTF-8"> 
        

</head>
<body>
		
				<!-- <div class="newnav"> -->
				<ul>
						<li><a href="dashboard.php">Dashboard</li></a>
							<p><b>MANAGE COURSES</p></b>
							<?php if ($role == 1) {  ?><li data-toggle="modal" data-target="#modalclick2">+ Add New Course</li><?php }  ?>
						<li><a href="lev1.php">ND I Courses</li></a>
						<li><a href="lev2.php">ND II Courses</li></a>
						<li><a href="lev3.php">HND I Courses</li></a>
						<li><a href="lev4.php">HND II Courses</li></a>
						<p><b>LECTURERS</p></b>
            <?php if ($role == 1) {  ?><li data-toggle="modal" data-target="#modalclick">+ Add New Lecturer</li><?php }  ?>
              
            
						<li><a href="lecturers.php">View Lecturers</li></a>
						<li><a href="logout.php">Logout</li></a>






				</ul>
						<!-- <button type="button" data-toggle="modal" data-target="#modalclick"> Click to Open the Modal form </button> -->


<div class="modal" tabindex="-1" role="dialog" id="modalclick">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Lecturer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-group" action="" method="POST">
        <label>User Name</label>
        <input type="text" class="form-control" name="uname">
        				<label>Password</label>
        <input type="text" class="form-control" name="pass">
          <label>Title</label>
          		<select name="title" class="form-control">
          			<option>Mr</option>
          			<option>Mrs</option>
          			<option>Miss</option>
          			<option>Dr.</option>
          			<option>Prof.</option>
          		</select><br>
          <label>Last Name</label>
        <input type="text" class="form-control" name="lname">
        <label>First Name</label>
        <input type="text" class="form-control" name="fname">
        			<label>Area of Specialization</label><br>

        			<?php

include 'dbconfig.php';

$subjectName = "SELECT * FROM scope_tbl";

$subject = mysqli_query( $subjectName, $conn );

?>

 
 <select name="area1">
 
 <option>---Select subject---</option>
 
 <?php while($subjectData = mysqli_fetch_array($subject)){ ?>
 
<option value="<?php echo $subjectData['sc_id'];?>"><?php echo $subjectData['Title'];?>

</option>

<?php }?> 

 </select><br>

 <label>Email</label>
  <input type="email" name="email" class="form-control">
        				<!-- <select name="sc_id" class="form-control">
        					<option value="1">Artificial Intelligence</option>
        					<option value="2">Networking</option>
        					<option value="3">Software Development</option>
        					<option value="4">Database Management</option>
        					<option value="5">Software Engineering</option>
        					<option value="6">Bioinformatics</option>
        					<option value="7">Information Management and Analytics</option>

        				</select> -->
<br>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="save" value="Save"></button>
      </div>
    </div>
  </div>
</div><!-- </div> -->

								<div class="modal" tabindex="-1" role="dialog" id="modalclick2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-group" action="" method="POST">
        <label>Course Title</label>
        <input type="text" class="form-control" name="title2">
        
<label>Course Code</label>
        <input type="text" class="form-control" name="code">
                <label>Course Unit</label>
        <input type="text" class="form-control" name="unit">
        
               
        			<label>Course Scope</label><br>
        				<?php

include 'dbconfig.php';

$subjectName = "SELECT * FROM scope_tbl";

$subject = mysqli_query( $subjectName, $conn );

?>

 
 <select name="scc">
 
 <option>---Select subject---</option>
 
 <?php while($subjectData = mysqli_fetch_array($subject)){ ?>
 
<option value="<?php echo $subjectData['sc_id'];?>"><?php echo $subjectData['Title'];?>

</option>

<?php }?> 

 </select><br>

  <label>L</label>
              <select name="l" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                 <option>5</option>


              </select>

              <label>P</label>
              <select name="p" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                 <option>5</option>


              </select>

              <label>CH</label>
              <select name="ch" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                 <option>5</option>


              </select>

              <label>LAB</label>
              <select name="lab" class="form-control">
                <option>LAB 1</option>
                <option>LAB 2</option>
                <option>LAB 3</option>
                <option>LAB 4</option>
                 <option>LAB 5</option>


              </select>

        	<label>Level</label>
        			<select name="level" class="form-control">
        				<option>ND I</option>
        				<option>ND II</option>
        				<option>HND I</option>
        				<option>HND II</option>


        			</select>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="save2" value="Save"></button>
      </div>
    </div>
  </div>
</div><!-- </div> -->

</body>
		</html>