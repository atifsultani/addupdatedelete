 <?php
$servername = 'localhost';
$username = 'root';
$password = 'goodday1234';
$dbname = "firsttask";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *  FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	?>
	<table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>e-mail</th>
        <th>password</th>
        <th>Phone</th>
        <th>gender</th>
        </thead>
        <tbody>
          <?php
  while($row = $result->fetch_assoc()) {
  	?>
  	<tr>
    <td><?php echo $row['admin_id']; ?></td>
    <td><?php echo $row['admin_name'];?></td>
    <td><?php echo $row['admin_email'];?></td>
    <td><?php echo $row['admin_password'];?></td>
    <td><?php echo $row['admin_phone'];?></td>
    <td><?php echo $row['admin_gender'];?></td>
    <td>
    	 <a href='edit.php?id=<?php echo $row['admin_id']; ?>'>Edit</a>
    	 <a href='delete.php?del=<?php echo $row['admin_id']; ?>'>Delete</a>
    </td>
</tr>
<?php } ?>
 </tbody>
</table>
 <?php }else{
    echo "<h2>No Record Found</h2>";
  }
 
$conn->close();
?> 
