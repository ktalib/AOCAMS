<?php include "conn.php";

if (isset($_POST['malloc'])) {
	$lecname=$_POST['lecname'];
	$id=$_POST['id'];



	 mysqli_query($conn, "UPDATE course SET 
							    lecturer = '$lecname'
							   		WHERE id_c='$id'"); 
   $finish = mysqli_query($conn,$sql);
if ($finish){
  
   echo ("<script LANGUAGE='JavaScript'>
     window.alert('Allocation Successful');
     window.location.href='dashboard.php';
     </script>");
}}

if (isset($_POST['assign'])) {
	
	$id=$_POST['idd'];
	$scid=$_POST['scid'];

	$sql="select* from staff where area1='$scid' order by rand()";
		$result=mysqli_query($conn,$sql);
			while ($row=$result->fetch_assoc()) {
				$autolec=$row['title']." ".$row['fname']." ".$row['lname'];
			}

			 mysqli_query($conn, "UPDATE course SET 
							 lecturer = '$autolec'
							   		WHERE id_c='$id'"); 
   $finish = mysqli_query($conn,$sql);
        }
if ($finish){
  
   echo ("<script LANGUAGE='JavaScript'>
     window.alert('Allocation Successful');
     window.location.href='dashboard.php';
     </script>");
}


?>

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
                                                <th>Manual Allocation</th>
                                                <th>Auto Allocation</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                      
                            $sql = "SELECT* FROM course";
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
                                        $scid= $row['sc_id'];
                                        
                                       
                                       
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
                                
                                
                                                 
                                  <td>
                                        
                                  		<form method="post" action="">
                                    


                                          <?php

include 'dbconfig.php';

// SQL query
$subjectName = "SELECT * FROM staff";

// Execute the query, passing the connection first
$subject = mysqli_query($conn, $subjectName);

// Check if the query executed successfully
if (!$subject) {
    die('Query Failed: ' . mysqli_error($conn));
}

// You can now fetch results from $subject if needed
?>


 
 <select name="lecname">
 
 <option>---Select Lecturer---</option>
 
 <?php while($subjectData = mysqli_fetch_array($subject)){ ?>
 
<option ><?php echo $subjectData['title']." " .$subjectData['fname']." ".$subjectData['lname'];?>

</option>

<?php }?> 

 </select>
 <input type="hidden" name="id" value="<?php echo $id ?>"><br>
                                       <button class="btn btn-success" name="malloc">Assign Course</button>
                                       
                                       	</form>


                                </td> 

                                <td>
                                	<form method="post" action="">
                                			<input type="hidden" name="idd" value="<?php echo $id ?>">
                                			<input type="hidden" name="scid" value="<?php echo $scid ?>">
                                		<button class="btn btn-secondary" name="assign">Auto Assign</button>

                                			</form>
                                </td>
                                  
                                                                                                 
                                
                            </tr>
                                    
                           <?php
                          }
                        }
                            ?>
                                    <tbody>    
                                    </table>
                                </div>