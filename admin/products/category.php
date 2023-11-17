<?php
include('../layout/header.php');

?>

<div class="card-header">
      <h1>Category Page</h1>
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