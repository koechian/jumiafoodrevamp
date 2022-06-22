<?php

session_start();
include "config.php";

$user = $_SESSION['user'];

$sql = "SELECT * FROM users WHERE id='$user'";

$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($res);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumia Food | Home</title>
    <link rel="stylesheet" href="../css/fonts.css" />
    <link rel="stylesheet" href="../css/landing.css" />
    <link rel="stylesheet" href="../css/profile-edit.css" />
</head>

<body>
    <header>
        <div id="left-elements">
            <img class="logo" src="../../assets/jumiafood-logo.svg" />
            <div title="Update my Location" class="location">
                <img class="icon" src="../../assets/maps-and-flags.svg" alt="" />
                <span id="mylocation">Strathmore University - Nairobi</span>
            </div>
        </div>
        <div id="searchbar">
            <input class="top-search" type="search" placeholder="Search"></input>
            <button type="submit">Search</button>
        </div>
        <div id="right-elements">
            <div>
                <a href="">My Orders</a>
                <a href="">Past Orders</a>
            </div>
            <div id="cart">
                <img class="cart-icon icon" src="../../assets/shopping-cart.svg" alt="" srcset="" />
            </div>
        </div>
    </header>
    <h2>Change your Account Details</h2>
    <form>
        <label id="firstname" for="fname"> First name: </label>
        <input type="text" id="firstname" name="firstname" value="<?php echo $result['firstname']; ?>">
        <label id="lastname" for="lname" class="lname"> Last name: </label>
        <input type="text" id="lastname" name="lastname" value="<?php echo $result["lastname"]; ?>"><br>
        <label id="emailaddress" for="email" class="email">Email: </label>
        <input type="email" id="email" name="email" value="<?php echo $result["email"]; ?>" readonly><br><br>
        <button id="change">Change</button><br><br>
        <div id=accept-conditions>
            <label class="container">Accept Emails on offers and orders.
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </div>

    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/index.js"></script>

</html>