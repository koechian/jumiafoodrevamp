<?php

session_start();
include "config.php";

$user = $_SESSION['user'];

$sql = "SELECT * FROM users WHERE id='$user'";

$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($res);

if (isset($_POST['Edit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $sql = "UPDATE users SET firstname = '$firstname' , lastname = '$lastname' WHERE id='$user'";

  
  $insertion = mysqli_query($conn, $sql);


  if ($insertion) {
    header("Location: ../php/profile-edit.php");
  } else {
    echo mysqli_error($conn);
  }
}


if (isset($_POST['logout'])) {
    session_destroy();
    header("Location:../../index.php");
    exit;
}

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
    <form method = "POST">
        <label id="firstname" for="fname"> First name: </label>
        <input type="text" id="firstname" name="firstname" placeholder="<?php echo $result["firstname"]; ?>">
        <label id="lastname" for="lname" class="lname"> Last name: </label>
        <input type="text" id="lastname" name="lastname" placeholder="<?php echo $result["lastname"]; ?>"><br>
        <label id="emailaddress" for="email" class="email">Email: </label>
        <input type="email" id="email" name="email" value="<?php echo $result["email"]; ?>" readonly><br><br>
        <div id=accept-conditions>
            <label class="container">Accept Emails on offers and orders.
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </div>
        <input type="submit" class="button" id="Edit" name="Edit" value="Edit">
        <input type="submit" class="button" id="logout" name="logout" value="Log Out">

    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../js/index.js"></script>

</html>