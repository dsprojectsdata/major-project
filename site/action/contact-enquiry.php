<?php

include(__DIR__ . '/../../config/connection.php');


$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$mobile = $_POST['mobile'];
$msg = $_POST['message'];

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

if ($subject == '') {
      $errors['subject'] = "Subject field is requrired";
}

if ($mobile == '') {
      $errors['mobile'] = "Mobile field is requrired";
}

if ($msg == '') {
      $errors['message'] = "Message field is requrired";
}

if (count($errors) > 0) {
      $_SESSION['error']  = $errors;
} else {
      $sql = "INSERT INTO enquiry (name,email,mobile,subject,msg) VALUES ('$name','$email','$mobile','$subject','$msg')";

      $result = mysqli_query($con, $sql);

      if ($result) {
            $_SESSION['success'] = "Enquiry saved successfully.";
      } else {
            $_SESSION['error'] = "Some error occurred.";
      }
}

header("location:" . $site_url . "contact.php");
