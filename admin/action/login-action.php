<?php

include('../../config/connection.php');

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if ($email == '') {
      $errors['email'] = 'Email field is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = 'Invalid email';
}

if ($password == '') {
      $errors['password'] = 'Password field is required';
}

if (count($errors) > 0) {
      $_SESSION['error'] = $errors;
      header("location:" . $admin_url . "index.php");
} else {

      $password = md5($password);

      $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";

      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result)) {
            $data = $result->fetch_assoc();
            $adminId = $data['id'];
            $_SESSION['success_msg'] = 'true';
            $admin = ['adminId' => $adminId, 'email' => $email, 'name' => $name];
            $_SESSION['adminInfo'] = $admin;
            header("location:$admin_url" . "dashboard.php");
      } else {
            $_SESSION['error_msg'] = 'Some error occurred';
            header("location:" . $admin_url . "index.php");
      }
}
