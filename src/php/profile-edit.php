<?php 
  include "config.php";

//   $firstname = "firstname";

//   $lastname = "lastname";

//   $email = "email";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumia Food | Home</title>
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/landing.css" />
    <link rel="stylesheet" href="css/profile-edit.css" />
</head>
<body>
    <header>
        <div id="left-elements">
            <img class="logo" src="/assets/jumiafood-logo.svg" />
        </div>
      </header>
      <h2>Change your Account Details</h2>
      <form>
          <label id = "firstname" for = "fname"> First name: </label>
          <input type = "text" id = "firstname" name = "firstname" value="<?php echo $_POST["firstname"]; ?>" ><br>
          <label id = "lastname" for = "lname" class="lname"> Last name: </label>
          <input type = "text" id = "lastname" name = "lastname" value="<?php echo $_POST["lastname"]; ?>"><br>
          <label id = "emailaddress" for = "email" class="email">Email: </label>
          <input type = "email" id = "email" name = "email" value ="<?php echo $_POST["email"]; ?>" readonly><br><br>
          <button id="change">Change</button><br><br>
          <div id = accept-conditions>
                <label class="container">Accept Emails on offers and orders.
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
          </div>
          
      </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/src/js/index.js"></script>
</html>