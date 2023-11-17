<?php
include('../layout/header.php');
?>

<section class="auth-section ">
      <div class="container">
            <div class="auth-block">
                  <div class="auth-heading">
                        <h1 class="text-grey">Signup</h1>
                        <p class="text-grey">Signup to access all your resources</p>
                        <?php
                        if (isset($_SESSION['error_msg'])) { ?>
                              <p class="error-msg"><?php echo $_SESSION['error_msg']; ?></p>

                        <?php
                              unset($_SESSION['error_msg']);
                        }
                        ?>
                  </div>
                  <div class="auth-form">
                        <form method="post" action="../action/signup-action.php">
                              <div class="form-input">
                                    <label for="">Name</label>
                                    <input type="text" placeholder="Enter name" name="name">
                              </div>
                              <div class="form-input">
                                    <label for="">Email</label>
                                    <input type="text" placeholder="Enter email" name="email">
                              </div>
                              <div class="form-input">
                                    <label for="">Password</label>
                                    <input type="text" placeholder="Enter password" name="password">
                              </div>
                              <div class="form-input form-btn">
                                    <button class="primary-button">Signup</button>
                              </div>
                        </form>
                        <div>
                              <p>Already have an account? <a href="<?php echo $site_url ?>auth/login.php">Login</a></p>
                        </div>
                  </div>
            </div>
      </div>
</section>


<?php
include(__DIR__ . '/../layout/footer.php');
?>