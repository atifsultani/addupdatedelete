<?php
session_start();
include 'connection.php';

if(isset($_SESSION['admin_id'])){
    
    $id=$_GET['id'];

   $select="SELECT * FROM admin WHERE admin_id = '$id'";
   $result = mysqli_query($conn,$select);

   while($row=mysqli_fetch_array($result)){
      
    $id=$row["admin_id"];
    $_SESSION['admin_id']=$id;
    $name =$row['admin_name'];
    $email=$row['admin_email'];
    $pass =$row['admin_password'];
    $phone =$row['admin_phone'];
    $gender =$row['admin_gender'];

}


?>


<html lang="en">
<head>
   
    <title>Edit</title>
</head>
<body>
 <form method="POST" action="">
        <label for="name">name:</label><br>
        <input type="text" name="name" value="<?php echo $name; ?>"/><br>
        <label for="email">email:</label><br>
        <input type="text" name="email" value="<?php echo $email; ?>" /><br>
        <label for="password">password:</label><br>
        <input type="password" name="password" value="<?php echo $pass; ?>"  /><br>
        <label for="phone">phone:</label><br>
        <input type="phone" name="phone" value="<?php echo $phone; ?>"  /><br>
        <label for="gender">gender:</label><br>
        <input type="gender" name="gender" value="<?php echo $gender; ?>"  /><br>
        <button type="submit" name="save">Edit</button>

</form>

</body>
</html>

<?php
      if(isset($_POST['save'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];
      $query="UPDATE admin SET admin_name= '$name', admin_email= '$email', admin_password= '$password', admin_phone= '$phone', admin_gender= '$gender' WHERE admin_id= '$id'";
                    $result = mysqli_query($conn, $query);

                    if($result){
                        echo "update successfully";
                    }

      }
    }
                    
                    ?>


               