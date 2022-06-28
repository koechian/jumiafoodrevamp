<?php
include("config.php");
include("../components/head.php");
include('../components/header.php');
?>

<style>
#cart {
  display: none !important;
}
  </style>
<main>
      <section class="details">
          <div id="personal-information">
              <div id="persional-information-header">
                <h1>Checkout</h1>
                <div id="breadcrumbs"><span>Home</span>&nbsp;>&nbsp;<span>Cart</span>&nbsp;>&nbsp;<span>Checkout</span></div>
                <h2>Personal Information</h2>
            </div>
            <div id="personal-info-form">
              <div>
                <label for="">First Name</label><br>
                <input class='checkout-input' type="text" name="first_name" id="first_name" placeholder=<?php echo $userdata[0]['firstname']?>><br>
                <label for="">Last Name</label><br>
                <input placeholder=<?php echo $userdata[0]['lastname']?> class='checkout-input' type="text" name="last_name" id="last_name"><br>
              </div>
              <div>
                <label for="">Phone Number</label><br>
                <input placeholder=<?php echo $userdata[0]['phone']?> class='checkout-input' type="tel" name="phone_number" id="phone_number"> <br>
                <label for="">Email</label><br>
                <input placeholder=<?php echo $userdata[0]['email']?> class='checkout-input' type="email" name="email" id="email">
              </div>
            </div>
          </div>
          <h2>Delivery Details</h2>
          <div id="delivery-details">
            <div>
              <label for="county">County</label><br>
              <select name="county" id="county">
                  <option value="Nairobi">Nairobi</option>
                  <option value="Kisumu">Kisumu</option>
                  <option value="Nakuru">Nakuru</option>
                  <option value="Mackakos">Machakos</option>
              </select><br>
              <label for="street">Street</label><br>
              <input class='checkout-input' type="text" name="street" id="street">
            </div>
            <div>
              <label for="estate">Estate/Apartment</label><br>
              <input class='checkout-input' type="text" name="estate" id="estate"><br>
              <label for="house">House Number/Apartment</label><br>
              <input class='checkout-input' type="text" name="house" id="house">
            </div>
          </div>
          <h2>Payment Details</h2>
          <div id="payment-details">
            <div>
              <h3>Pay on Delivery</h3>
              <input  type="radio" name="" id="">
              <label for="">Cash</label><br>
              <input  type="radio" name="" id="">
              <label for="">Mobile Money</label>
            </div>
      
            <div id="payment-details-right">
              <h3>Pay Now</h3>
              <div>
                <input  type="radio" name="" id=" ">
              <label for="">Mobile Money</label>
            </div>
            <div>
              <input type="radio">
              <label for="">Mastercard</label>
            </div>
            </div>
          </div>
      </section>
      <section class="reciept">
          <div id="order-details">
              <div>
                  <h2>Your&nbsp;Order:</h2>
                  <span>Subtotal:</span><br><br>
                  <span>Delivery:</span><br><br>
                  <span>VAT:</span><br><br>
                  <h3>Total:</h3>
              </div>
              <div>
                  <span id="subtotal">Ksh &nbsp;</span><br>
                  <span>Ksh 70</span><br>
                  <span id="vat">Ksh &nbsp;</span><br>
                  <h3 id="total">Ksh &nbsp;</h3>
              </div>
          </div>
          <div id="buttons">
              <button>Place Order</button>
              <hr>
          </div>
          <div id="order-items">
          </div>
      </section>
    </main>
  </body>
  <?php include('../components/scripts.php'); ?>

</html>
