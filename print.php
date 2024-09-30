<?php
include "conn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Course Allocation Print Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="assets/js/lib/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
	

			<div class="containerz">


		<!-- <button id="dataclass3" onclick="myFunction()">Print Allocation</button> -->

<script>
function myFunction() {
  window.print();
}</script>
					<center><img src="images/logo.jpg" width="100" height="100"></center>
					<button class="btn btn-primary"  onclick="myFunction()" role="button">Print Allocation</button>

						<center><h1>THE FEDERAL POLYTECHNIC BIDA</h1></center>
						<center><h6>COMPUTER SCIENCE DEPARTMENT</h6></center>
						<center><h6>MORNING COURSE ALLOCATION</h6></center>
						<center><h6>Inter Office Memorandum</h6></center>

						<h5 style="border-bottom: 1px solid black">From: HOD, CSD</h5>	<h5 class="sub1">TO: See Distribution Below	</h5>
<h5 style="border-bottom: 1px solid black">Our Ref: FPB/SICT/CSD/CSCA/Vol……..</h5>	 <h5  class="sub1">Date: </h5>
<h4 style="border-bottom: 1px solid black">FIRST SEMESTER COURSE ALLOCATION 2024/2025 ACADEMIC SESSION (MORNING)</h4>





	<div class="card-datatable table-responsive" style=" width:1000px">
                        <table class="datatables-demo table table-striped table-bordered" style=" width:100%">

                            
                            <thead>
                                            <tr>
                                                <th>Serial #</th>
                                                
                                                
                                                <th>Course Title</th>
                                                 <th>Course Code</th>
                                                 
                                                 <th>Unit</th>
                                                <th>Level</th>
                                                <th>L</th>
                                                <th>P</th>
                                                <th>CH</th>
                                                <th>LAB</th>
                                                <th>Lecturer</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                      
                            $sql = "SELECT* FROM course where level='ND I'";
                    $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $sn=1;
                                while($row = $result->fetch_assoc()) {
                                        $title2= $row['title2'];
                                        $code= $row['code'];
                                        
                                        $unit= $row['unit'];
                                        $level= $row['level'];
                                        $l= $row['l'];
                                        $p= $row['p'];
                                        $ch= $row['ch'];
                                        $lab= $row['lab'];
                                        $lecturer= $row['lecturer'];
                                        $id= $row['id_c'];
                                        
                                       
                                       
                                    ?>
                                        
                                            <tr>
                                    <td><?php echo $sn++; ?></td>
                                <td><?php echo $row['title2'] ?></td>
                                <td><?php echo $row['code'] ?></td>
                                <td><?php echo $row['unit'] ?></td>
                                 <td><?php echo $row['level'] ?></td>
                                  <td><?php echo $row['l'] ?></td>
                                   <td><?php echo $row['p'] ?></td>
                                    <td><?php echo $row['ch'] ?></td>
                                     <td><?php echo $row['lab'] ?></td>
                                 <td><?php echo $row['lecturer'] ?></td>
                                
                                
                                                 
                                                                    
                                                                                                 
                                
                            </tr>
                                    
                           <?php
                          }
                        }
                            ?>
                                    <tbody>    
                                    </table>
                                </div>
                                	<center><h6>ND II Computer Science</h6></center>
                                <div class="card-datatable table-responsive" style=" width:1000px">
                        <table class="datatables-demo table table-striped table-bordered" style=" width:100%">

                            
                            <thead>
                                            <tr>
                                                <th>Serial #</th>
                                                
                                                
                                                <th>Course Title</th>
                                                 <th>Course Code</th>
                                                 
                                                 <th>Unit</th>
                                                <th>Level</th>
                                                <th>L</th>
                                                <th>P</th>
                                                <th>CH</th>
                                                <th>LAB</th>
                                                <th>Lecturer</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                      
                            $sql = "SELECT* FROM course where level='ND II'";
                    $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $sn=1;
                                while($row = $result->fetch_assoc()) {
                                        $title2= $row['title2'];
                                        $code= $row['code'];
                                        
                                        $unit= $row['unit'];
                                        $level= $row['level'];
                                        $l= $row['l'];
                                        $p= $row['p'];
                                        $ch= $row['ch'];
                                        $lab= $row['lab'];
                                        $lecturer= $row['lecturer'];
                                        $id= $row['id_c'];
                                        
                                       
                                       
                                    ?>
                                        
                                            <tr>
                                    <td><?php echo $sn++; ?></td>
                                <td><?php echo $row['title2'] ?></td>
                                <td><?php echo $row['code'] ?></td>
                                <td><?php echo $row['unit'] ?></td>
                                 <td><?php echo $row['level'] ?></td>
                                  <td><?php echo $row['l'] ?></td>
                                   <td><?php echo $row['p'] ?></td>
                                    <td><?php echo $row['ch'] ?></td>
                                     <td><?php echo $row['lab'] ?></td>
                                 <td><?php echo $row['lecturer'] ?></td>
                                
                                
                                                 
                                                                    
                                                                                                 
                                
                            </tr>
                                    
                           <?php
                          }
                        }
                            ?>
                                    <tbody>    
                                    </table>
                                </div>


                                <div class="containerz2">
					<center><img src="images/logo.jpg" width="100" height="100"></center>

						<center><h1>THE FEDERAL POLYTECHNIC BIDA</h1></center>
						<center><h6>COMPUTER SCIENCE DEPARTMENT</h6></center>
						<center><h6>MORNING COURSE ALLOCATION</h6></center>
						<center><h6>Inter Office Memorandum</h6></center>

						<h5 style="border-bottom: 1px solid black">From: HOD, CSD</h5>	<h5 class="sub1">TO: See Distribution Below	</h5>
<h5 style="border-bottom: 1px solid black">Our Ref: FPB/SICT/CSD/CSCA/Vol……..</h5>	 <h5  class="sub1">Date: </h5>
<h4 style="border-bottom: 1px solid black">SECOND SEMESTER COURSE ALLOCATION 2024/2025 ACADEMIC SESSION (MORNING)</h4>





	<div class="card-datatable table-responsive" style=" width:1000px">
                        <table class="datatables-demo table table-striped table-bordered" style=" width:100%">

                            
                            <thead>
                                            <tr>
                                                <th>Serial #</th>
                                                
                                                
                                                <th>Course Title</th>
                                                 <th>Course Code</th>
                                                 
                                                 <th>Unit</th>
                                                <th>Level</th>
                                                <th>L</th>
                                                <th>P</th>
                                                <th>CH</th>
                                                <th>LAB</th>
                                                <th>Lecturer</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                      
                            $sql = "SELECT* FROM course where level='HND I'";
                    $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $sn=1;
                                while($row = $result->fetch_assoc()) {
                                        $title2= $row['title2'];
                                        $code= $row['code'];
                                        
                                        $unit= $row['unit'];
                                        $level= $row['level'];
                                        $l= $row['l'];
                                        $p= $row['p'];
                                        $ch= $row['ch'];
                                        $lab= $row['lab'];
                                        $lecturer= $row['lecturer'];
                                        $id= $row['id_c'];
                                        
                                       
                                       
                                    ?>
                                        
                                            <tr>
                                    <td><?php echo $sn++; ?></td>
                                <td><?php echo $row['title2'] ?></td>
                                <td><?php echo $row['code'] ?></td>
                                <td><?php echo $row['unit'] ?></td>
                                 <td><?php echo $row['level'] ?></td>
                                  <td><?php echo $row['l'] ?></td>
                                   <td><?php echo $row['p'] ?></td>
                                    <td><?php echo $row['ch'] ?></td>
                                     <td><?php echo $row['lab'] ?></td>
                                 <td><?php echo $row['lecturer'] ?></td>
                                
                                
                                                 
                                                                    
                                                                                                 
                                
                            </tr>
                                    
                           <?php
                          }
                        }
                            ?>
                                    <tbody>    
                                    </table>
                                </div>
                                	<center><h6>ND II Computer Science</h6></center>
                                <div class="card-datatable table-responsive" style=" width:1000px">
                        <table class="datatables-demo table table-striped table-bordered" style=" width:100%">

                            
                            <thead>
                                            <tr>
                                                <th>Serial #</th>
                                                
                                                
                                                <th>Course Title</th>
                                                 <th>Course Code</th>
                                                 
                                                 <th>Unit</th>
                                                <th>Level</th>
                                                <th>L</th>
                                                <th>P</th>
                                                <th>CH</th>
                                                <th>LAB</th>
                                                <th>Lecturer</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                      
                            $sql = "SELECT* FROM course where level='HND II'";
                    $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $sn=1;
                                while($row = $result->fetch_assoc()) {
                                        $title2= $row['title2'];
                                        $code= $row['code'];
                                        
                                        $unit= $row['unit'];
                                        $level= $row['level'];
                                        $l= $row['l'];
                                        $p= $row['p'];
                                        $ch= $row['ch'];
                                        $lab= $row['lab'];
                                        $lecturer= $row['lecturer'];
                                        $id= $row['id_c'];
                                        
                                       
                                       
                                    ?>
                                        
                                            <tr>
                                    <td><?php echo $sn++; ?></td>
                                <td><?php echo $row['title2'] ?></td>
                                <td><?php echo $row['code'] ?></td>
                                <td><?php echo $row['unit'] ?></td>
                                 <td><?php echo $row['level'] ?></td>
                                  <td><?php echo $row['l'] ?></td>
                                   <td><?php echo $row['p'] ?></td>
                                    <td><?php echo $row['ch'] ?></td>
                                     <td><?php echo $row['lab'] ?></td>
                                 <td><?php echo $row['lecturer'] ?></td>
                                
                                
                                                 
                                                                    
                                                                                                 
                                
                            </tr>
                                    
                           <?php
                          }
                        }
                            ?>
                                    <tbody>    
                                    </table>
                                </div>

</body>
</html>