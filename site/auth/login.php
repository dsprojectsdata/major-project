<?php
include('../layout/header.php');

if (isset($_SESSION['userInfo'])) {
      header("location:$site_url");
}

if (isset($_SESSION['error'])) {
      $error = $_SESSION['error'];
}

?>

<section class="auth-section ">
      <div class="container">
            <div class="auth-block">
                  <div class="auth-heading">
                        <h1 class="text-grey">Login</h1>
                        <p class="text-grey">Log in to access all your resources</p>
                  </div>
                  <div class="auth-form">
                  <form method="post" action="../action/login-action.php">
                              <div class="form-input">
                                    <label for="">Email</label>
                                    <input type="text" name="email" placeholder="Enter email">
                                    <?php
                                    if (isset($error['email'])) { ?>
                                          <p class="error-msg"><?php echo $error['email']; ?></p>

                                    <?php
                                          unset($_SESSION['error']['email']);
                                    }
                                    ?>
                              </div>
                              <div class="form-input">
                                    <label for="">Password</label>
                                    <input type="text" name="password" placeholder="Enter password">
                                    <?php
                                    if (isset($error['password'])) { ?>
                                          <p class="error-msg"><?php echo $error['password']; ?></p>

                                    <?php
                                          unset($_SESSION['error']['password']);
                                    }
                                    ?>
                              </div>
                              <div class="form-input form-btn">
                                    <button class="primary-button">Login</button>
                              </div>
                        </form>
                        <div>
                              <p>Don't Have an Account? <a href="<?php echo $site_url ?>auth/signup.php">Signup</a></p>
                        </div>
                  </div>
            </div>
      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>