<?php

include('../../../config/connection.php');


$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];
$image = $_POST['image'];


$sql = " INSERT INTO product (name,price,description,category,img) VALUES ('$name','$price','$description','$category','$image')";

$result = mysqli_query($con, $sql);

if ($result) {
      $_SESSION['success'] = "Product saved successfully.";
} else {
      $_SESSION['error'] = "Some error occurred.";
}
header("location:$admin_url/products/product.php");
