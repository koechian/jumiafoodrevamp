<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumia Food | Home</title>
    <link rel="shortcut icon" href="../../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/history.css" />
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../css/landing.css" />
    <link rel="stylesheet" href="../css/order.css" />
    <link rel="stylesheet" href="../css/cart.css" />
    <link rel="stylesheet" href="../css/resturant.css" />
    <link rel="stylesheet" href="../css/iziToast.min.css" />
    <link rel="stylesheet" href="../css/checkout.css" />
</head>
<?php 
session_start();
$user=$_SESSION['user'];

$sql="SELECT * FROM users WHERE id = $user";
$data=mysqli_query($conn,$sql);
$userdata=array();
while($row=mysqli_fetch_assoc($data)){
    $userdata[]=$row;
}
?>
    <input type="hidden" id="user-id" name="user" value="<?php echo $user?>">

<body>
    