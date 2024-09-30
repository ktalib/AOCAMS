<?php include "conn.php";

$sql = "SELECT* FROM course WHERE level='HND II'";

$sql2 = "SELECT Title FROM scope_tbl";
$result = $conn->query($sql);
if ($result ->num_rows > 0){
		echo "<table class='table table-bordered'><tr><th>Course Title</th><th>Course Code</th><th>Unit</th><th>Lecturer</th><th>Level</th></tr>";

while($row = $result->fetch_assoc()) {
	echo "<tr><td>" .$row['title2']. "<td>" .$row['code']. "<td>" .$row['unit']. "<td>" .$row['lecturer']. "<td>" .$row['level']. "</td></tr>";

}
echo "<table class='table table-bordered'";

}

?>