<?php
include('../layout/header.php');

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
}
$order_id = $_GET['id'];

$sql = " SELECT *,orders.created_at as order_date, orders.price as total_price from orders 
        JOIN 
        users ON users.id = orders.user_id 
        JOIN
        user_address ON user_address.id = orders.shipping_address
        JOIN
        order_items ON order_items.order_id = orders.id
        JOIN
        product ON order_items.product_id = product.id

        WHERE orders.id= $order_id
";

$result = mysqli_query($con, $sql);

$orderSql =  " SELECT *,orders.created_at as order_date, orders.price as total_price from orders 
JOIN 
users ON users.id = orders.user_id 
JOIN
user_address ON user_address.id = orders.shipping_address

WHERE orders.id= $order_id
";
$orderResult = mysqli_query($con, $orderSql);
$orderResult = $orderResult->fetch_assoc();
?>

<div class="card-header">
    <h4 class="py-10">Order Details</h4>
</div>

<div class="card-block">
    <div class="card-left card-layout">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>S. No.</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($data = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['name'] ?></td>
                        <td><img src="<?php echo $admin_url . 'assets/uploads/products/' . $data['img'] ?>" class="img-icon"></td>
                        <td>$<?php echo $data['price'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="card-right card-layout">
        <div class="order-summary">
            <h5>Order Summary</h5>
            <hr>
            <div class="order-summary-detail">
                <p>Invoice Id</p>
                <p><?php echo $orderResult['invoice_id'] ?></p>
            </div>
            <div class="order-summary-detail">
                <p>Order Date</p>
                <p><?php echo date('Y-m-d', strtotime($orderResult['order_date'])) ?></p>
            </div>

            <div class="order-summary-detail">
                <p>Status</p>
                <p><?php
                    if ($orderResult['status'] == 0) {
                        echo 'Pending';
                    } elseif ($orderResult['status'] == 1) {
                        echo 'Shipped';
                    } elseif ($orderResult['status'] == 2) {
                        echo 'Delivered';
                    }
                    ?></p>
            </div>
            <hr>

            <div class="order-summary-detail">
                <p>Order Total</p>
                <p>$<?php echo $orderResult['total_price'] ?></p>
            </div>
        </div>
    </div>
</div>


<?php
include('../layout/footer.php')
?>