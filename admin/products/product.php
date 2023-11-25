<?php
include('../layout/header.php');

if (isset($_SESSION['error'])) {
      $error = $_SESSION['error'];
}


$sql = " SELECT * from category ";

$result = mysqli_query($con, $sql);
?>

<div class="card-header">
      <h4 class="py-10">Product Page</h4>
</div>

<div class="card-block">
      <div class="card-left card-layout">
            <div class="form-group">
                  <p>Add Product</p>
                  <p class="success-msg"><?php if (isset($_SESSION['success'])) {
                                                echo $_SESSION['success'];
                                                unset($_SESSION['success']);
                                          } ?></p>
            </div>
            <form method="post" enctype="multipart/form-data" action="<?php echo $admin_url ?>action/products/product-save.php">
                  <div class="form-group">
                        <label for="">Category</label>
                        <select name="category">
                              <option value="">Select Category</option>
                              <?php $i = 1;
                              while ($data = $result->fetch_assoc()) {
                              ?>
                                    <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?></option>

                              <?php } ?>
                        </select>
                        <p class="error"><?php
                                          if (isset($error['category'])) {
                                                echo $error['category'];
                                                unset($_SESSION['error']['category']);
                                          }
                                          ?></p>
                  </div>

                  <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter category name">
                        <p class="error"><?php
                                          if (isset($error['name'])) {
                                                echo $error['name'];
                                                unset($_SESSION['error']['name']);
                                          }
                                          ?></p>
                  </div>

                  <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="price" placeholder="Enter category price">
                        <p class="error"><?php
                                          if (isset($error['price'])) {
                                                echo $error['price'];
                                                unset($_SESSION['error']['price']);
                                          }
                                          ?></p>
                  </div>

                  <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" rows="6"></textarea>
                        <p class="error"><?php
                                          if (isset($error['description'])) {
                                                echo $error['description'];
                                                unset($_SESSION['error']['description']);
                                          }
                                          ?></p>
                  </div>

                  <div class="form-group">
                        <label for="">Long Description</label>
                        <textarea name="long_description" rows="6"></textarea>
                        <p class="error"><?php
                                          if (isset($error['long_description'])) {
                                                echo $error['long_description'];
                                                unset($_SESSION['error']['long_description']);
                                          }
                                          ?></p>
                  </div>

                  <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" placeholder="Enter category name">
                        <p class="error"><?php
                                          if (isset($error['image'])) {
                                                echo $error['image'];
                                                unset($_SESSION['error']['image']);
                                          }
                                          ?></p>
                  </div>

                  <div>
                        <button type="submit" class="save-btn">Save</button>
                  </div>
            </form>
      </div>

      <div class="card-right card-layout">

      </div>
</div>


<?php
include('../layout/footer.php')
?>