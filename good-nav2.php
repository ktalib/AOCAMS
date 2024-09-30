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
	$area2 = $_POST['area2'];
	
	
	



$sql = "INSERT INTO staff(uname,pass,title,lname,fname,sc_id,area2) VALUES ('{$uname}','{$pass}','{$title}', '{$lname}', '{$fname}', '{$area1}','{$area2}') ";

$finish = mysqli_query($conn,$sql);
if ($finish){
 	
		echo "Lecturer Has Been Registered Successfully";

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
	
	
	
	



$sql = "INSERT INTO course(code,title2,unit,sc_id,level) VALUES ('{$code}','{$title2}','{$unit}', '{$scc}', '{$level}') ";

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
	<title>DESIGN AND IMPLEMENTATION OF COURSE ALLOCATION SYSTEM</title>
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
						<li><a href="dashb.php">Dashboard</li></a>
							
            <?php if ($role == 1) {  ?><p><b>MANAGE COURSES</p></b><?php }  ?>
							
						<li><a href="lev1.php">100 Level Courses</li></a>
						<li><a href="lev2.php">200 Level Courses</li></a>
						<li><a href="lev3.php">300 Level Courses</li></a>
						<li><a href="lev4.php">400 Level Courses</li></a>
						<p><b>LECTURERS</p></b>
           
              
            
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
        			<label>Core Area of Specialization</label><br>

        			<?php

include 'dbconfig.php';

$subjectName = "SELECT * FROM scope_tbl";

$subject = mysql_query( $subjectName, $conn );

?>

 
 <select name="area1">
 
 <option>---Select subject---</option>
 
 <?php while($subjectData = mysql_fetch_array($subject)){ ?>
 
<option value="<?php echo $subjectData['sc_id'];?>"><?php echo $subjectData['Title'];?>

</option>

<?php }?> 

 </select>
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
<label>Minor Areas of Specialization</label><br>
        <input type="checkbox"  name="area2" value="Artificial Intelligence">Artificial Intelligence <br>
        <input type="checkbox"  name="area2" value="Networking">Networking
        <input type="checkbox"  name="area2" value="Software Development">Software Development <br>
        <input type="checkbox"  name="area2" value="Database Management">Database Management
        <input type="checkbox"  name="area2" value="Software Engineering">Software Engineering <br>
        <input type="checkbox"  name="area2" value="Bioinformatics">Bioinformatics
        <input type="checkbox"  name="area2" value="Information Management and Analytics">Information Management and Analytics
        
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

$subject = mysql_query( $subjectName, $conn );

?>

 
 <select name="scc">
 
 <option>---Select subject---</option>
 
 <?php while($subjectData = mysql_fetch_array($subject)){ ?>
 
<option value="<?php echo $subjectData['sc_id'];?>"><?php echo $subjectData['Title'];?>

</option>

<?php }?> 

 </select>
        	<label>Level</label>
        			<select name="level" class="form-control">
        				<option>100</option>
        				<option>200</option>
        				<option>300</option>
        				<option>400</option>


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