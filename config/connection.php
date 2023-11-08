<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'ecom';

$con = mysqli_connect($host, $user, $password, $db);
if (!$con) {
      echo "connection failed";
      die;
}

include('constants.php');