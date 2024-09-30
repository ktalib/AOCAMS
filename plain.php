<?php
include "conn.php";
// Turn off error reporting for production, but consider enabling it for debugging
error_reporting(0);

// Manual allocation
if (isset($_POST['malloc'])) {
    $lecname = $_POST['lecname'];
    $id = $_POST['id'];

    $sql = "UPDATE course SET lecturer = ? WHERE id_c = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $lecname, $id);
    $finish = $stmt->execute();

    if ($finish) {
        echo "<script>
            alert('Manual Allocation Successful');
            window.location.href='dashboard.php';
        </script>";
    } else {
        echo "<script>
            alert('Manual Allocation Failed: " . $stmt->error . "');
        </script>";
    }
    $stmt->close();
}

// Auto allocation
if (isset($_POST['assign'])) {
    $id = $_POST['idd'];
    $scid = $_POST['scid'];

    // First, check if there are any staff members in the specified area
    $check_sql = "SELECT COUNT(*) as count FROM staff WHERE area1 = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $scid);
    $check_stmt->execute();
    $result = $check_stmt->get_result();
    $row = $result->fetch_assoc();
    
    if ($row['count'] > 0) {
        // If staff members exist, proceed with random selection
        $sql = "SELECT title, fname, lname FROM staff WHERE area1 = ? ORDER BY RAND() LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $scid);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($row = $result->fetch_assoc()) {
            $autolec = $row['title'] . " " . $row['fname'] . " " . $row['lname'];
            
            $update_sql = "UPDATE course SET lecturer = ? WHERE id_c = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("ss", $autolec, $id);
            $finish = $update_stmt->execute();
            
            if ($finish) {
                echo "<script>
                    alert('Auto Allocation Successful');
                    window.location.href='dashboard.php';
                </script>";
            } else {
                echo "<script>
                    alert('Auto Allocation Failed: " . $update_stmt->error . "');
                </script>";
            }
            $update_stmt->close();
        } else {
            echo "<script>
                alert('No staff member found for the specified area.');
            </script>";
        }
        $stmt->close();
    } else {
        echo "<script>
            alert('No staff members available in the specified area.');
        </script>";
    }
    $check_stmt->close();
}

// ... (rest of your HTML and PHP code for displaying the table)
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