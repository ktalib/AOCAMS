<?php include "conn.php";

$newname=$title." ". $fname." ". $lname;


?>
	<div class="card-datatable table-responsive" style=" width:1000px">
                        <table class="datatables-demo table table-striped table-bordered" style=" width:100%">
                            
                            <thead>
                            	<h6>Welcome <b><?php echo $newname; ?></b></h6>
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
                                                
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                      
                            $sql = "SELECT* FROM course where lecturer='$newname'";
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
                                
                                
                                
                                                 
                                  <td>
                                        
                                  		
                                  
                                                                                                 
                                
                            </tr>
                                    
                           <?php
                          }
                        }
                            ?>
                                    <tbody>    
                                    </table>


