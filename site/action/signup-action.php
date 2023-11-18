<?php

include(__DIR__ . '/../../config/connection.php');
echo "<pre>";


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if ($name == '') {
      $errors['name'] = 'Name field is required';
} elseif (strlen($name) < 2 || strlen($name) > 15) {
      $errors['name'] = 'Name length should be between 2 and 15 characters';
}
if ($email == '') {
      $errors['email'] = 'Email field is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'Invalid email';
}

if ($password == '') {
      $errors['password'] = 'Password field is required';
} elseif (strlen($password) < 5 || strlen($password) > 15) {
      $errors['password'] = 'Password length should be between 5 and 15 characters';
}

if (count($errors) > 0) {
      $_SESSION['error'] = $errors;
      header("location:" . $site_url . "auth/signup.php");
} else {

      $password = md5($password);

      $existSql = "SELECT * FROM users WHERE email = '$email'";
      $existResult = mysqli_query($con, $existSql);

      if (mysqli_num_rows($existResult)) {
            $errors['email'] = 'Email already exists';
            $_SESSION['error'] = $errors;
            header("location:" . $site_url . "auth/signup.php");
            die;
      } else {
            $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

            $result = mysqli_query($con, $sql);

            if ($result) {
                  $userId = mysqli_insert_id($con);
                  $_SESSION['success_msg'] = 'true';
                  $user = ['userId' => $userId, 'email' => $email, 'name' => $name];
                  $_SESSION['userInfo'] = $user;

                  header("location:$site_url");
            } else {
                  $_SESSION['error_msg'] = 'Some error occurred';
                  header("location:" . $site_url . "auth/signup.php");
            }
      }
}
