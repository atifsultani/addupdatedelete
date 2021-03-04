<?php 
      include 'connection.php';
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
/*
    echo $name;
    echo $email;
    echo $age;
    echo $phone;
    die;
    */
    $query = "INSERT INTO `admin`(`admin_name`, `admin_email`, `admin_password`, `admin_phone`, `admin_gender`)
    VALUES ('$name' ,'$email' ,'$password' ,'$phone' ,'$gender')";
    mysqli_query($conn,$query)or die ('Error in updating Database') ;

  header("location:login.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<form method="POST" action="">
    <label for="name">Name:</label><br>
    <input type="text" name="name" /><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email" /><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password"><br>
    <label for="phone">Phone:</label><br>
    <input type="number" name="phone"><br>
    <label for="gender">Gender:</label><br>
    <input type="text" name="gender"><br><br>
    <button type="submit" name="save">save</button>

    </form>
</body>
</html>