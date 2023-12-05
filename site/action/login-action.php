<?php

include(__DIR__ . '/../../config/connection.php');

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
      header("location:" . $site_url . "auth/login.php");
} else {

      $password = md5($password);

      $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result)) {
            $data = $result->fetch_assoc();
            $userId = $data['id'];
            $_SESSION['success_msg'] = 'true';
            $user = ['userId' => $userId, 'email' => $email, 'name' => $name];
            $_SESSION['userInfo'] = $user;
            header("location:$site_url");
      } else {
            $_SESSION['error_msg'] = 'Some error occurred';
            header("location:" . $site_url . "auth/login.php");
      }
}
