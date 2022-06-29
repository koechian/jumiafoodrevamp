<?php

include "config.php";
include('../components/head.php');
include('../components/header.php');

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
<style>
    #cart{
        display:none !important;
    }
    .left-elements {
  display: flex;
  flex-direction: row;
  /* align-items: center; */
  margin-left: -100px;
}
#left-elements div {
  margin-left: 20px;
  display: flex;
  align-items: center;
  transition: ease-in-out 0.2s;
}
#left-elements div:hover {
  cursor: pointer;
  transform: scale(1.01);
}
#left-elements div .icon {
  color: #ffb240 !important;
}

form {
  margin: auto;
  width: 50%;
  padding: 10px;
}
input {
  min-width: 70% !important;
  padding: 10px 20px;
  margin: 8px 0;
  border: 2px solid orangered;
  border-radius: 4px;
}
button {
  background-color: orangered;
  border: none;
  border-radius: 15px;
  color: white;
  padding: 10px 25px;
  text-align: center;
  font-size: 20px;
  display: inline-block;
  size: 30px;
  display: inline-flex;
}
h2 {
  margin: auto;
  width: 50%;
  padding: 10px;
  text-align: center;
  font-size: 40px;
}
#fname,
#lname,
#email {
  display: inline-block;
  width: 500px;
  text-align: left;
  font-size: 25px;
  writing-mode: horizontal-tb;
  font-weight: bold;
}
#firstname,
#lastname,
#emailaddress {
  display: inline-block;
  width: 150px;
  text-align: left;
  font-size: 25px;
  writing-mode: horizontal-tb;
  font-weight: bold;
}
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 25px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

.container:hover input ~ .checkmark {
  background-color: #ccc;
}

.container input:checked ~ .checkmark {
  background-color: #2196f3;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.container input:checked ~ .checkmark:after {
  display: block;
}

.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.label div accept-conditions {
  width: 300px;
}

</style>
<?php include('../components/scripts.php'); ?>
</html>