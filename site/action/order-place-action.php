<?php

include(__DIR__ . '/../../config/connection.php');


$user_id = $_SESSION['userInfo']['userId'];

$first_name = $_POST['f_name'];
$email = $_POST['email'];

$cart = $_SESSION['cart'];

      $sql = "INSERT INTO user_address (user_id,first_name,email) VALUES ('$user_id','$first_name','$email')";

      $result = mysqli_query($con, $sql);

      if ($result) {
            $userAddressId = mysqli_insert_id($con);
            $invoice_id = '#'.$user_id.'ECOM';
            $total = 0;
            foreach ($cart as $key => $value) {
                  $total += $value['price'];
            }

      $orderSql = "INSERT INTO orders (user_id,invoice_id,shipping_address,price) VALUES ('$user_id','$invoice_id','$userAddressId','$total')";

      $orderResult = mysqli_query($con, $orderSql);

      if($orderResult){
            $orderId = mysqli_insert_id($con);

            foreach ($cart as $key => $item) {
                  $pro_id = $item['id'];
                  $pro_price = $item['price'];

            $orderItemSql = "INSERT INTO order_items (user_id,order_id,product_id,price) VALUES ('$user_id','$orderId','$pro_id','$pro_price')";
            
            $orderItemResult = mysqli_query($con, $orderItemSql);
      }
      }else{
            $_SESSION['error_msg'] = 'Some error occurred';
            header("location:$site_url"."user/checkout-address.php");
      }
      } else {
            $_SESSION['error_msg'] = 'Some error occurred';
            header("location:" . $site_url . "user/checkout-address.php");
}
