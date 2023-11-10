<?php
include('header.php');
// echo "<pre>";
// echo "</pre>";

?>


<div class="table-wrapper">
      <table>
            <thead>
                  <tr>
                        <th>S. No</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Delete</th>
                  </tr>
            </thead>
            <tbody>
                  <?php
                  $i = 1;
                  if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $value) { ?>
                              <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $value['name'] ?></td>
                                    <td><?php echo $value['price'] ?></td>
                                    <td>Remove</td>
                              </tr>
                  <?php }
                  }
                  ?>

            </tbody>
      </table>
</div>
<?php
// print_r($_SESSION['cart']);

$total = 0;
if (isset($_SESSION['cart'])) {

      foreach ($_SESSION['cart'] as $key => $value) {
            $total += $value['price'];
      }
}
?>
<h1>Total - <?php echo $total ?></h1>

<!-- 0 + 1000 = 1000
1000+30 = 1030
1030+20 = 1050 -->