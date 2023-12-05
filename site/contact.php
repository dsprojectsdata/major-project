<?php
include(__DIR__ . '/layout/header.php');

if (isset($_SESSION['error'])) {
      $error = $_SESSION['error'];
}

$sql = "SELECT * from contact_info ";
$result = mysqli_query($con, $sql);

?>

<section class="page-banner-section">
      <div class="container">
            <div class="page-banner-content">
                  <h1>CONTACT US</h1>
            </div>
      </div>
</section>


<section class="contact">
      <div class="container">
            <div class="section-heading">
                  <h3>Our Addresses</h3>
                  <p>Contact us for more information or for better deals</p>
            </div>
            <div class="contact-block d-flex">

                  <?php while ($data = $result->fetch_assoc()) {
                  ?>
                        <div class="contact-address text-grey">
                              <h4><?php echo $data['name'] ?></h4>
                              <ul>
                                    <li class="d-flex gap-10">
                                          <span><i class="fa-solid fa-map-marker-alt"></i></span>
                                          <span><?php echo $data['address'] ?></span>
                                    </li>
                                    <li><i class="fa-solid fa-phone"></i> <?php echo $data['mobile'] ?></li>
                                    <li><i class="fa-solid fa-envelope"></i> <?php echo $data['email'] ?></li>
                              </ul>
                        </div>

                  <?php
                  }
                  ?>
            </div>
      </div>
</section>

<section class="contact-location">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28476.712179268674!2d75.78406943476558!3d26.853020999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1700473913568!5m2!1sen!2sin" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="contact-form">
      <div class="container">
            <div class="section-heading">
                  <h3>Get In Touch</h3>
                  <p>Feel free to contact us</p>
            </div>
            <div class="contact-form-block">
                  <p class="success-msg"><?php if (isset($_SESSION['success'])) {
                                                echo $_SESSION['success'];
                                                unset($_SESSION['success']);
                                          } ?></p>
                  <form action="<?php echo $site_url ?>action/contact-enquiry.php" method="post">
                        <div class="d-flex gap-20">
                              <div class="form-input">
                                    <input type="text" name="name" id="first-name" placeholder="Name">
                                    <p class="error-msg"><?php
                                                      if (isset($error['name'])) {
                                                            echo $error['name'];
                                                            unset($_SESSION['error']['name']);
                                                      }
                                                      ?></p>
                              </div>
                              <div class="form-input">
                                    <input type="text" id="email" name="email" placeholder="Email">
                                    <p class="error-msg"><?php
                                                      if (isset($error['email'])) {
                                                            echo $error['email'];
                                                            unset($_SESSION['error']['email']);
                                                      }
                                                      ?></p>
                              </div>
                        </div>

                        <div class="d-flex gap-20">
                              <div class="form-input">
                                    <input type="text" id="subject" name="subject" placeholder="Subject">
                                    <p class="error-msg"><?php
                                                      if (isset($error['subject'])) {
                                                            echo $error['subject'];
                                                            unset($_SESSION['error']['subject']);
                                                      }
                                                      ?></p>
                              </div>
                              <div class="form-input">
                                    <input type="text" placeholder="Mobile" name="mobile">
                                    <p class="error-msg"><?php
                                                      if (isset($error['mobile'])) {
                                                            echo $error['mobile'];
                                                            unset($_SESSION['error']['mobile']);
                                                      }
                                                      ?></p>
                              </div>
                        </div>

                        <div class="form-input">
                              <textarea name="message" rows="6" placeholder="Message"></textarea>
                              <p class="error-msg"><?php
                                                if (isset($error['message'])) {
                                                      echo $error['message'];
                                                      unset($_SESSION['error']['message']);
                                                }
                                                ?></p>
                        </div>

                        <div class="form-input form-btn">
                              <button class="primary-button">Submit Enquiry</button>
                        </div>
                  </form>
            </div>
      </div>
</section>


<?php
include(__DIR__ . '/layout/footer.php');
?>