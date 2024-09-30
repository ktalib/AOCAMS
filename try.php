<?php require('conn.php');

// $id = (int)$_GET['id'];
$sql = "SELECT* FROM scope_tbl";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
   $row = mysqli_fetch_assoc($result);
   extract($row);
} else {
    echo "0 results";
}


?>