<?php

include('../../config/connection.php');


$name = $_POST['name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];


$errors = [];

if ($name == '') {
      $errors['name'] = "Name field is requrired";
}

if ($address == '') {
      $errors['address'] = "Address field is requrired";
}

if ($mobile == '') {
      $errors['mobile'] = "Mobile field is requrired";
}

if ($email == '') {
      $errors['email'] = "Email field is requrired";
}


if (count($errors) > 0) {
      $_SESSION['error']  = $errors;
      header("location:$admin_url" . "contact/index.php");
} else {

      $name = ucfirst($name);

      $sql = " INSERT INTO contact_info (name,address,mobile,email) VALUES ('$name','$address','$mobile','$email')";

      $result = mysqli_query($con, $sql);
      if ($result) {
            $_SESSION['success'] = "Contact info saved successfully.";
      } else {
            $_SESSION['error'] = "Some error occurred.";
      }
      header("location:$admin_url" . "contact/index.php");
}
