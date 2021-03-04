<?php

include 'connection.php';
      

   session_start();
     
if(isset($_POST['Submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $select="SELECT * FROM admin WHERE admin_email = '$email' AND admin_password = '$password'";
  
  $query=mysqli_query($conn,$select);
  
  
if ($row=mysqli_fetch_array($query))
{
    $id=$row["admin_id"];
    $_SESSION['admin_id']=$id;
   
    header("location:profile.php?id=".$id);
}

else{
    echo "some problem";
}
}
      ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
     <form method="POST" action="">
        <label for="eamil">email:</label><br>
        <input type="text" name="email" value="email"><br>
        <label for="password">password:</label><br>
        <input type="password" name="password" value="password"><br><br>
        <button type="submit" name="Submit">Submit</button>
    </form>
</body>
</html>