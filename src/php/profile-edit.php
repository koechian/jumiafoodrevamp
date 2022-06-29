<?php

include "config.php";
include('../components/head.php');
include('../components/header.php');

$user = $_SESSION['user'];

$sql = "SELECT * FROM users WHERE id='$user'";

$res = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($res);

if (isset($_POST['Edit'])) {
    "UPDATE users SET firstname =['?'] WHERE id='$user'";
}


if (isset($_POST['logout'])) {
    session_destroy();
    header("Location:../../index.php");
    exit;
}


?>
    <h2>Change your Account Details</h2>
    <form method = "POST">
        <label id="firstname" for="fname"> First name: </label>
        <input type="text" id="firstname" name="firstname" value="<?php echo $result['firstname']; ?>">
        <label id="lastname" for="lname" class="lname"> Last name: </label>
        <input type="text" id="lastname" name="lastname" value="<?php echo $result["lastname"]; ?>"><br>
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
<?php include('../components/scripts.php'); ?>
</html>