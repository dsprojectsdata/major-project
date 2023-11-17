<?php

include(__DIR__ . '/../../config/connection.php');
echo "<pre>";


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password); 


$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

$result = mysqli_query($con, $sql);

if($result){
      $_SESSION['success_msg'] = 'true';
      header("location:$site_url");
}else{
      $_SESSION['error_msg'] = 'Some error occurred';
      header("location:$site_url.'auth/signup.php'");
}






