<?php
include('../layout/header.php');

$sql = " SELECT * from category ";

$result = mysqli_query($con, $sql);
?>

<div class="card-header">
      <h1>Product Page</h1>
</div>

<div class="card-block">
      <div class="card-left">
            <div class="form-group">
                  <p>Add Category</p>
                  <p class="success-msg"><?php if (isset($_SESSION['success'])) {
                                                echo $_SESSION['success'];
                                                unset($_SESSION['success']);
                                          } ?></p>
            </div>
            <form method="post" action="<?php echo $admin_url ?>action/products/product-save.php">
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
                  </div>

                  <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter category name">
                  </div>

                  <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="price" placeholder="Enter category price">
                  </div>

                  <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" rows="6"></textarea>
                  </div>

                  <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" placeholder="Enter category name">
                  </div>

                  <div>
                        <button type="submit" class="save-btn">Save</button>
                  </div>
            </form>
      </div>

      <div class="card-right">
            
      </div>
</div>


<?php
include('../layout/footer.php')
?>