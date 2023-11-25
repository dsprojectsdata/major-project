<?php
include(__DIR__ . '/layout/header.php');

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

                  <!-- <div class="contact-address text-grey">
                        <h4>UK Office</h4>
                        <ul>
                              <li class="d-flex gap-10">
                                    <span><i class="fa-solid fa-map-marker-alt"></i></span>
                                    <span>PO Box 16122 Collins Street West Victoria 8007 Canada</span>
                              </li>
                              <li><i class="fa-solid fa-phone"></i> +91 7891560120</li>
                              <li><i class="fa-solid fa-envelope"></i> info@example.com</li>
                        </ul>
                  </div>

                  <div class="contact-address text-grey">
                        <h4>India Office</h4>
                        <ul>
                              <li class="d-flex gap-10">
                                    <span><i class="fa-solid fa-map-marker-alt"></i></span>
                                    <span>PO Box 16122 Collins Street West Victoria 8007 Canada</span>
                              </li>
                              <li><i class="fa-solid fa-phone"></i> +91 7891560120</li>
                              <li><i class="fa-solid fa-envelope"></i> info@example.com</li>
                        </ul>
                  </div> -->
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
                  <form action="form-input">
                        <div class="d-flex gap-20">
                              <div class="form-input">
                                    <input type="text" id="first-name" placeholder="Name">
                              </div>
                              <div class="form-input">
                                    <input type="text" id="email" placeholder="Email">
                              </div>
                        </div>

                        <div class="d-flex gap-20">
                              <div class="form-input">
                                    <input type="text" id="subject" placeholder="Subject">
                              </div>
                              <div class="form-input">
                                    <input type="text" placeholder="Mobile">
                              </div>
                        </div>

                        <div class="form-input">
                              <textarea name="message" rows="6" placeholder="Message"></textarea>
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