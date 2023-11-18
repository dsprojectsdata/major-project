<?php
include(__DIR__ . '/../config/connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link rel="stylesheet" href="<?php echo $admin_url ?>assets/css/auth.css">
</head>
<body>
      <div class="login-form">
            <div class="login-block">
                  <h1>Welcome Back</h1>
                  <form action="" method="post">
                        <div class="form-input">
                              <input type="text" placeholder="Enter email" name="email">

                        </div>
                        <div class="form-input">
                              <input type="text" placeholder="Enter password" name="password">
                        </div>
                        <div>
                              <button type="submit" class="submit">Login</button>
                        </div>
                  </form>
            </div>
      </div>

</body>
</html>