<?php

if(isset($_GET['id'])&&!empty($_GET['id'])){
    $action=$_GET['action'];

    switch($action){
        case 'insert' : insert();break;
        case 'fetch' :fetch();break;
        case 'order' :order();break;
        case 'remove' :removeItem();break;

    }
}
 function insert(){
    include "../php/config.php";
    
    $user=$_GET['id'];
    $item=$_GET['item'];
    $insert="INSERT INTO cart(item_id,id)VALUES($item,$user)";

    $result=mysqli_query($conn,$insert);
 }

 function fetch(){
    include "../php/config.php";

    $user=$_GET['id'];
    $fetch="SELECT menu.product_name, menu.product_price,menu.product_image,cart.item_id FROM cart INNER JOIN menu ON cart.item_id=menu.id WHERE cart.id=$user";

    $result=mysqli_query($conn,$fetch);
    $res=array();

    while($row=$result->fetch_assoc()){
        $res[]=$row;
    }

   echo json_encode($res);
 }
 function order(){
    include "../php/config.php";
    $response=$_GET['orderitems'];
    $i=0;
    $user=$_GET['id'];

   while($i<count($response)){
    $sql="INSERT INTO orders (item_id,id)VALUES(".$response[$i]['item_id'].",".$user.")";
    $delete="DELETE FROM cart WHERE item_id=".$response[$i]['item_id'];
    $result=mysqli_query($conn,$sql);

    if($result){
    $res=mysqli_query($conn,$delete);
    }
    $i++;
   }
}
   function removeItem(){
    include "../php/config.php";

    $user=$_GET['id'];
    $item=$_GET['item_id'];
    $delete="DELETE FROM cart WHERE id=$user AND item_id=$item";

    $result=mysqli_query($conn,$delete);
    
    echo mysqli_error($conn);

   }
 