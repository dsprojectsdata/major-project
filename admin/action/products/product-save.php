<?php

include('../../../config/connection.php');


$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$long_description = $_POST['long_description'];
$category = $_POST['category'];
$image = $_FILES['image']['name'];

$errors = [];

if ($name == '') {
      $errors['name'] = "name is requrired";
}

if ($price == '') {
      $errors['price'] = "price is requrired";
}

if ($description == '') {
      $errors['description'] = "description is requrired";
}
if ($long_description == '') {
      $errors['long_description'] = "long description is requrired";
}
if ($category == '') {
      $errors['category'] = "category is requrired";
}
if ($image == '') {
      $errors['image'] = "image is requrired";
}
if (count($errors) > 0) {
      $_SESSION['error']  = $errors;
      // header('location:http://localhost/full-stack/form/');
} else {

      $sql = " INSERT INTO product (name,price,description,long_description,category,img) VALUES ('$name','$price','$description','$long_description','$category','$image')";

      $result = mysqli_query($con, $sql);

      if ($result) {
            move_uploaded_file($_FILES['image']['tmp_name'], '../../../site/assets/uploads/products/' . $_FILES['image']['name']);
            $_SESSION['success'] = "Product saved successfully.";
      } else {
            $_SESSION['error'] = "Some error occurred.";
      }
}



header("location:" . $admin_url . "products/product.php");
