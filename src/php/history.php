<?php
include("config.php");
include("../components/head.php");
include('../components/header.php');

$select="SELECT menu.product_name, menu.product_price,menu.description,orders.table_key FROM orders INNER JOIN menu ON orders.item_id=menu.id WHERE orders.id=$user";

$result=mysqli_query($conn,$select);
$res=mysqli_fetch_assoc($result);
?>
<section class='tbl-section'>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Description</th>
      <th scope="col">Item Price</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $count=1; 
    while($res=mysqli_fetch_assoc($result)){
        echo '<tr>
        <th scope="row">'.$count.'</th>
        <td>'.$res['product_name'].'</td>
        <td>'.$res['description'].'</td>
        <td>'.$res['product_price'].'</td>
      </tr>';
    $count++;
    }
    ?>
  </tbody>
</table>
</section>
</body>
<?php include('../components/scripts.php'); ?>
</html>