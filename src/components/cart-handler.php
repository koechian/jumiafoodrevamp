<?php

if(isset($_GET['id'])&&!empty($_GET['id'])){
    $action=$_GET['action'];

    switch($action){
        case 'insert' : insert();break;
        case 'fetch' :fetch();break;
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
    $fetch="SELECT menu.product_name, menu.product_price,menu.product_image FROM cart INNER JOIN menu ON cart.item_id=menu.id WHERE cart.id=$user";

    $result=mysqli_query($conn,$fetch);
    $res=array();

    while($row=$result->fetch_assoc()){
        $res[]=$row;
    }

   echo json_encode($res);
 }