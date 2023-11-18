<?php
include('../layout/header.php');

?>

<div class="card-header">
      <h4 class="py-10">Category Page</h4>
</div>

<div class="card-block">
      <div class="card-left">
            <p class="success-msg"><?php if (isset($_SESSION['success'])) {
                                          echo $_SESSION['success'];
                                          unset($_SESSION['success']);
                                    } ?></p>
            <div class="form-group">
                  <p>Add Category</p>
            </div>
            <form method="post" action="<?php echo $admin_url ?>action/products/category-save.php" enctype="multipart/form-data">
                  <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter category name">
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
            <form action="">
                  <div>
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter category name">
                  </div>

            </form>
      </div>
</div>


<?php
include('../layout/footer.php')
?>