<?php

include(__DIR__ . '/../../config/connection.php');
session_destroy();
header("location:$site_url");
