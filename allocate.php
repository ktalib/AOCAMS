<?php include "conn.php";

$sql = "SELECT title2,code,unit,scope,level,title,lname,fname
FROM staff
INNER JOIN course
ON staff.sc_id = course.sc_id";

$sql2 = "SELECT Title FROM scope_tbl";
$result = $conn->query($sql);
if ($result ->num_rows > 0){
		echo "<table class='table table-bordered'><tr><th>Course Title</th><th>Course Code</th><th>Unit</th><th>Course Scope</th><th>Level</th><th>Lecturer</th></tr>";

while($row = $result->fetch_assoc()) {
	echo "<tr><td>" .$row['title2']. "<td>" .$row['code']. "<td>" .$row['unit']. "<td>" .$row['scope']. "<td>" .$row['level']. "<td>" .$row['title']. " " .$row['fname']." " .$row['lname']. "</td></tr>";

}
echo "<table class='table table-bordered'";

}

?>