<?php

include "config.php";

$user=$_GET['user'];
$item=$_GET['item'];

$sql="INSERT INTO cart(item_id,id)VALUES($item,$user)";

$result=mysqli_query($conn,$sql);

?>