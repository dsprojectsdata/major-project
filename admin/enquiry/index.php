<?php
include('../layout/header.php');

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
}

$sql = "SELECT * from enquiry ORDER BY created_at DESC ";
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($data = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $data['name'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['mobile'] ?></td>
                        <td><?php echo $data['subject'] ?></td>
                        <td><?php echo $data['msg'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<?php
include('../layout/footer.php')
?>