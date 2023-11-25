<?php

include('../../../config/connection.php');


$name = $_POST['name'];
$image = $_FILES['image']['name'];







$errors = [];
if ($name == '') {
      $errors['name'] = "Name field is requrired";
}

if ($image == '') {
      $errors['image'] = "Image field is requrired";
}
if (count($errors) > 0) {
      $_SESSION['error']  = $errors;
      header("location:$admin_url/products/category.php");
} else {

      $name = ucfirst($name);
      $image = time() . '-' . md5($image) . '.' . pathinfo($image, PATHINFO_EXTENSION);

      $sql = " INSERT INTO category (name,image) VALUES ('$name', '$image')";

      $result = mysqli_query($con, $sql);

      if ($result) {
            move_uploaded_file($_FILES['image']['tmp_name'], '../../../site/assets/uploads/category/' . $image);
            $_SESSION['success'] = "Category saved successfully.";
      } else {
            $_SESSION['error'] = "Some error occurred.";
      }
      header("location:$admin_url/products/category.php");
}
