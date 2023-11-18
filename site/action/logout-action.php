<?php

include(__DIR__ . '/../../config/connection.php');
echo "<pre>";

session_destroy();
header("location:$site_url");
