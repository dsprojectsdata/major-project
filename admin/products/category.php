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
      <table id="myTable" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>

        <tr>
            <td>asd</td>
            <td>aaaaa</td>
        </tr>

        <tr>
            <td>bbbb</td>
            <td>ccccc</td>
        </tr>

        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>

        <tr>
            <td>asd</td>
            <td>aaaaa</td>
        </tr>

        <tr>
            <td>bbbb</td>
            <td>ccccc</td>
        </tr>


        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>

        <tr>
            <td>asd</td>
            <td>aaaaa</td>
        </tr>

        <tr>
            <td>bbbb</td>
            <td>ccccc</td>
        </tr>


        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>

        <tr>
            <td>asd</td>
            <td>aaaaa</td>
        </tr>

        <tr>
            <td>bbbb</td>
            <td>ccccc</td>
        </tr>
    </tbody>
</table>
      </div>
</div>


<?php
include('../layout/footer.php')
?>
<script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
</script>