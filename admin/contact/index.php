<?php
include('../layout/header.php');

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
}

$sql = "SELECT * from category ";
$result = mysqli_query($con, $sql);
?>

<div class="card-header">
    <h4 class="py-10">Contact Info</h4>
</div>

<div class="card-block">
    <div class="card-left card-layout">
        <p class="success-msg"><?php if (isset($_SESSION['success'])) {
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                } ?></p>
        <div class="form-group">
            <p>Add Contact Info</p>
        </div>
        <form method="post" action="<?php echo $admin_url ?>action/contact-save.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Enter name">
                <p class="error"><?php
                                          if (isset($error['name'])) {
                                                echo $error['name'];
                                                unset($_SESSION['error']['name']);
                                          }
                                          ?></p>
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" placeholder="Enter address">
                <p class="error"><?php
                                          if (isset($error['address'])) {
                                                echo $error['address'];
                                                unset($_SESSION['error']['address']);
                                          }
                                          ?></p>
            </div>

            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" name="mobile" placeholder="Enter mobile">
                <p class="error"><?php
                                          if (isset($error['mobile'])) {
                                                echo $error['mobile'];
                                                unset($_SESSION['error']['mobile']);
                                          }
                                          ?></p>
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" placeholder="Enter email">
                <p class="error"><?php
                                          if (isset($error['email'])) {
                                                echo $error['email'];
                                                unset($_SESSION['error']['email']);
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
                        <td><?php echo $data['name'] ?></td>
                        <td><img src="<?php echo $site_url . 'assets/uploads/category/' . $data['image'] ?>" class="img-icon" alt=""></td>
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
