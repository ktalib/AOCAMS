<?php include "conn.php";

$sql = "SELECT*
FROM staff
INNER JOIN course
ON staff.sc_id = course.sc_id";

$result=mysqli_query($conn,$sql);
while ($row=$result->fetch_assoc()) {
	$lecturer=$row['fname'];
	echo $lecturer;
}
