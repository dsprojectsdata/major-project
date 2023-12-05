<?php
include('../layout/header.php');

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
}

$sql = "SELECT * from blogs ";
$result = mysqli_query($con, $sql);
?>

<div class="card-header">
    <h4 class="py-10">Blogs Page</h4>
</div>

<div class="card-block">
    <div class="card-left card-layout">
        <p class="success-msg"><?php if (isset($_SESSION['success'])) {
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                } ?></p>
        <div class="form-group">
            <p>Add Blog</p>
        </div>
        <form method="post" action="<?php echo $admin_url ?>action/products/blog-save.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" placeholder="Enter title">
                <p class="error"><?php
                                          if (isset($error['title'])) {
                                                echo $error['title'];
                                                unset($_SESSION['error']['title']);
                                          }
                                          ?></p>
            </div>

            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image">
                <p class="error"><?php
                                          if (isset($error['image'])) {
                                                echo $error['image'];
                                                unset($_SESSION['error']['image']);
                                          }
                                          ?></p>
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea rows="7" name="description" placeholder="Enter description"></textarea>
                <p class="error"><?php
                                          if (isset($error['description'])) {
                                                echo $error['description'];
                                                unset($_SESSION['error']['description']);
                                          }
                                          ?></p>
            </div>

            <div>
                <button type="submit" class="save-btn">Save</button>
            </div>
        </form>
    </div>

    <div class="card-right card-layout">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>S. No.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i = 1;
                while ($data = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['title'] ?></td>
                        <td><img src="<?php echo $site_url . 'assets/uploads/blogs/' . $data['img'] ?>" class="img-icon" alt=""></td>
                        <td>Edit</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<?php
include('../layout/footer.php')
?>
