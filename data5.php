<?php include "conn.php";

if (isset($_POST['new'])) {
	$name=$_POST['lecname'];
	$email=$_POST['email'];
	$id=$_POST['id'];

	 $sql = "SELECT* FROM course where lecturer='$name'";
                  $result =mysqli_query($conn,$sql);
                                while($row = $result->fetch_assoc()) {
                                	$sn=1;
                                    $title2= $row['title2'];
                                        $code= $row['code'];
                                        
                                        $unit= $row['unit'];
                                        $level= $row['level'];
                                        $l= $row['l'];
                                        $p= $row['p'];
                                        $ch= $row['ch'];
                                        $lab= $row['lab'];
                                        $lecturer=$row['lecturer'];

                      $msg="Dear $name,<br> We pleased to announce to you that you will be handling the following courses for this academic session:<br>
    			$title2 ($code)


    <br>Regards.";



   
                               


 require("./PHPMailer-master/src/PHPMailer.php");
  require("PHPMailer-master/src/SMTP.php");

                                 
                               
                                  
            
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server 
$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = 'premium71.web-hosting.com';
    $mail->Port = '465'; // or 587
    $mail->IsHTML(true);
    $mail->Username = 'info@philajoglobal.com';
    $mail->Password = 'Active123@';
    $mail->SetFrom('info@philajoglobal.com');
    $mail->Subject = 'Course Allocation Sheet';
    $mail->Body = $msg;
   

    $mail->AddAddress($email);
//     $contacts = $cats;
// // "chidi@springlight.ng",
// // "info@researchclue.com",
// //....as many email address as you need


// foreach($contacts as $contact) {
//     $mail->AddAddress($contact);

     if($mail->Send()) {   

     mysqli_query($conn, "UPDATE staff SET 
							    stat = 'Email Sent'
							   		WHERE id_s='$id'"); 
            

        echo ("<script LANGUAGE='JavaScript'>
   window.alert('Success!');    window.location.href='lecturers.php';     </script>");

// //             $finish = mysqli_query($conn,$sql);
// // if ($finish){
               

               
//         echo ("swal('Good job!', 'You clicked the button!', 'success'");

//     }else{
//         echo ("<script LANGUAGE='JavaScript'>
//     window.alert('Settings Error');
//     window.location.href='index.html';
//     </script>");

// }

//         }




 }}
                

}

        

      
// //             $finish = mysqli_query($conn,$sql);
// // if ($finish){
               

               
//         echo ("swal('Good job!', 'You clicked the button!', 'success'");

//     }else{
//         echo ("<script LANGUAGE='JavaScript'>
//     window.alert('Settings Error');
//     window.location.href='index.html';
//     </script>");

// }

//         }





?>

<div class="card-datatable table-responsive" style=" width:1000px">
                        <table class="datatables-demo table table-striped table-bordered" style=" width:100%">
                            
                            <thead>
                                            <tr>
                                                <th>Serial #</th>
                                                
                                                
                                                <th>Name of Lecturer</th>
                                                 <th>Area of Specialization</th>
                                                 <th>Status</th>
                                                 <th>Operation</th>
                                                 
                                                
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                      
                            $sql = "SELECT*  FROM staff inner join scope_tbl on staff.area1=scope_tbl.sc_id";
                    $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $sn=1;
                                while($row = $result->fetch_assoc()) {
                                        $lecname= $row['title']." ".$row['fname']." ".$row['lname'];
                                        $area=$row['Title'];
                                         $stat=$row['stat'];
                                          $email=$row['email'];
                                                $id= $row['id_s'];
                                        
                                       
                                       
                                    ?>
                                        
                                            <tr>
                                    <td><?php echo $sn++; ?></td>
                                <td><?php echo $lecname ?></td>
                                <td><?php echo $row['Title'] ?></td>
                                <td><?php echo $row['stat'] ?></td>

                                <td>
                                	<form method="post" action="">
                                		<input type="hidden" name="lecname" value="<?php echo $lecname ?>">
                                		<input type="hidden" name="id" value="<?php echo $id ?>">
                                		<input type="hidden" name="email" value="<?php echo $email ?>">
                                	<button class="btn btn-warning" name="new">Send Course Alloc. Email</button>
                                	</form>
                                
                                </td>
                                                 
                                 
                                  
                                                                                                 
                                
                            </tr>
                                    
                           <?php
                          }
                        }
                            ?>
                                    <tbody>    
                                    </table>
