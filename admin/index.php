<?php
include(__DIR__ . '/../config/connection.php');

if (isset($_SESSION['adminInfo'])) {
      header("location:$admin_url" . "dashboard.php");
}

if (isset($_SESSION['error'])) {
      $error = $_SESSION['error'];
}

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
                  <form action="<?php echo $admin_url . "action/login-action.php" ?>" method="post">
                        <div class="form-input">
                              <input type="text" placeholder="Enter email" name="email" value="admin@gmail.com">
                              <?php
                              if (isset($error['email'])) { ?>
                                    <p class="error"><?php echo $error['email']; ?></p>
                              <?php
                                    unset($_SESSION['error']['email']);
                              }
                              ?>
                        </div>
                        <div class="form-input">
                              <input type="text" placeholder="Enter password" name="password" value="admin1234">
                              <?php
                              if (isset($error['password'])) { ?>
                                    <p class="error"><?php echo $error['password']; ?></p>

                              <?php
                                    unset($_SESSION['error']['password']);
                              }
                              ?>
                        </div>
                        <div>
                              <button type="submit" class="submit">Login</button>
                        </div>
                  </form>
            </div>
      </div>

</body>

</html>