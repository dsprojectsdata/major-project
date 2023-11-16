<?php
include('../layout/header.php');
?>

<section class="auth-section ">
      <div class="container">
            <div class="auth-block">
                  <div class="auth-heading">
                        <h1 class="text-grey">Login</h1>
                        <p class="text-grey">Log in to access all your resources</p>
                  </div>
                  <div class="auth-form">
                        <form action="form-input">
                              <div class="form-input">
                                    <label for="">Email</label>
                                    <input type="text" placeholder="Enter email">
                              </div>
                              <div class="form-input">
                                    <label for="">Password</label>
                                    <input type="text" placeholder="Enter password">
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