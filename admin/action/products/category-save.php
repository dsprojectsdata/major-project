<?php

include('../../../config/connection.php');


$name = $_POST['name'];
$image = $_POST['image'];

$sql = " INSERT INTO category (name,image) VALUES ('$name', '$image')";

$result = mysqli_query($con, $sql);

if ($result) {
      $_SESSION['success'] = "Category saved successfully.";
} else {
      $_SESSION['error'] = "Some error occurred.";
}
header("location:$admin_url/products/category.php");
