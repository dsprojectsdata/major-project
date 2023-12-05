<?php

include('../../../config/connection.php');


$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image']['name'];







$errors = [];
if ($title == '') {
      $errors['title'] = "Title field is requrired";
}

if ($image == '') {
      $errors['image'] = "Image field is requrired";
}

if ($description == '') {
      $errors['description'] = "Description field is requrired";
}

if (count($errors) > 0) {
      $_SESSION['error']  = $errors;
      header("location:$admin_url/blogs/index.php");
} else {

      $title = ucfirst($title);
      $image = time() . '-' . md5($image) . '.' . pathinfo($image, PATHINFO_EXTENSION);

      $sql = " INSERT INTO blogs (title,img,description) VALUES ('$title', '$image','$description')";

      $result = mysqli_query($con, $sql);

      if ($result) {
            move_uploaded_file($_FILES['image']['tmp_name'], '../../../site/assets/uploads/blogs/' . $image);
            $_SESSION['success'] = "Blogs saved successfully.";
      } else {
            $_SESSION['error'] = "Some error occurred.";
      }
      header("location:$admin_url/blogs/index.php");
}
