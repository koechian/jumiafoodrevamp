<?php 
  include "config.php";

    if (isset($_POST['submit'])) {

      $firstname = $_POST['firstname'];

      $lastname = $_POST['lastname'];

      $email = $_POST['email'];

      $password = $_POST['password'];

      $sql = "INSERT INTO 'users'('firstname', 'lastname', 'email', 'password') VALUES ('$firstname','$lastname','$email','$password')";

      $result = $conn->query($sql);

      if ($result == TRUE) {

        echo "New record created successfully.";

      }else{

        echo "Error:". $sql . "<br>". $conn->error;

      } 

      $conn->close(); 

    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Jumia Food</title>
    <link rel="stylesheet" href="/src/css/fonts.css" />
    <link rel="stylesheet" href="/src/css/login.css" />
  </head>
  <body>
    <header><img class="logo" src="/assets/jumia-logo-dark.svg" /></header>
    <section class="gradient">
      <div class="container">
        <div class="login">
          <div class="title">
            <h1>Sign In</h1>
            <h3>
              New here?&nbsp;<span id="register-button"
                >Create an account.</span
              >
            </h3>
          </div>
          <div class="input-boxes">
            <div>
              <label for="email">Email</label>
              <input type="email" />
            </div>
            <div>
              <label for="passowrd">Password</label>
              <input type="password" />
            </div>
            <button id="landing">Sign In</button>
          </div>
          <div class="hr-break">
            <hr />
            <span>or</span>
          </div>
        </div>
        <div class="register">
          <div class="title">
            <h1>Create an Account</h1>
            <h3>
              Already have an Account?&nbsp;<span id="sign-in-button"
                >Sign In.</span
              >
            </h3>
          </div>
          <form action="/src/index.php" method="POST">
            <div class="input-boxes">
            <div>
                <label for="firstname">First Name</label>
                <input type="text" id = "firstname" name = "firstname" />
              </div>
              <div>
                <label for="lastname">Last Name</label>
                <input type="text" id = "lastname" name = "lastname" />
              </div>
              <div>
                <label for="email">Email</label>
                <input type="email" id = "email" name = "email" />
              </div>
              <div>
                <div>
                  <label for="password">Password</label>
                  <input type="password" id = "password" name = "password"/>
                </div>
                <div>
                  <label for="confirm-password" >Confirm Password</label>
                  <input type="password"/>
                </div>
              </div>
              <input type ="submit" name = "submit" value = "Done">
            </div>
          </form>
          <div class="hr-break">
            <hr />
            <span>or</span>
          </div>
        </div>
        <div class="sign-in-options">
          <div class="sign-in-options-buttons google">
            <img class="login-icons" src="/assets/google.svg" alt="" />
            <span>Continue with Google</span>
          </div>
          <div class="sign-in-options-buttons facebook">
            <img class="login-icons" src="/assets/facebook.svg" alt="" />
            <span>Continue with Facebook</span>
          </div>
          <div class="sign-in-options-buttons apple">
            <img class="login-icons" src="/assets/apple.svg" alt="" />

            <span>Continue with Apple</span>
          </div>
        </div>
      </div>
    </section>
    <section class="image"></section>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/src/js/index.js"></script>
</html>
