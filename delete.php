<?php

include 'connection.php';

$delete_record = $_GET['del'];
 
$query = "DELETE FROM admin WHERE admin_id='$delete_record'";

$data = mysqli_query($conn, $query);
if($data){
    echo"record has been successfully";
}
else
{
    echo"sorry, delete process failed";
}

?>