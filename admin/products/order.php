<?php
include('../layout/header.php');

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
}

$sql = "SELECT *,orders.id as id from orders JOIN users ON orders.user_id = users.id ";
$result = mysqli_query($con, $sql);

?>

<div class="card-header">
    <h4 class="py-10">Order Page</h4>
</div>

<div class="card-block">
    <div class="card-full card-layout">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>S. No.</th>
                    <th>User</th>
                    <th>Invoice</th>
                    <th>Price</th>
                    <th>Status</th>
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
                        <td><?php echo $data['invoice_id'] ?></td>
                        <td><?php echo $data['price'] ?></td>
                        <td><?php echo $data['status'] ?></td>
                        <td><a href="<?php echo  $admin_url . "products/order-details.php?id=" . $data['id'] ?>"><i class="fa-solid fa-eye"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<?php
include('../layout/footer.php')
?>