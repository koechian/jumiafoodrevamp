<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/landing.css" />
    <link rel="stylesheet" href="css/checkout.css" />
    <link rel="stylesheet" href="css/cart.css" />
    <title>Checkout | Jumia Food</title>
  </head>
  <body>
    <header>
      <div class="cart-dropdown">
        <div id="cart-header">
          <div id="close-cart"></div>
        </div>
        <div id="cart-body">
          <div class="cart-item">
            <div id="cart-item-left">
              <div>
                <span>Wings Lunchbox</span>
              </div>
              <div>
                <span>Quantity</span>
                <div>
                <button onclick="$(this).next()[0].stepDown()" ><span class="iconify" data-icon="icon-park-solid:reduce-one" style="color: #f90;" data-width="16" data-height="16"></span></button>
                <input value="1" type="number">
                <button onclick="$(this).prev()[0].stepUp()" ><span class="iconify" data-icon="fluent:add-circle-16-filled" style="color: #f90;" data-width="20" data-height="20"></span></button></div>
              </div>
              <div>
                <span>Price</span>
                <div>
                <span>Ksh 367</span>
              </div>
              </div>
            </div>
            <div id="cart-item-right"></div>
          </div>
        </div>
        <div id="cart-footer"></div>

      </div>
      <div id="left-elements">
          <img class="logo" src="../assets/jumiafood-logo.svg" />
        <div title="Update my Location" class="location">
          <img class="icon" src="../assets/maps-and-flags.svg" alt="" />
          <span id="mylocation">Strathmore University - Nairobi</span>
        </div>
      </div>
      <div id="searchbar">
        <input class="top-search" type="search" placeholder="Search"></input>
        <button type="submit">Search</button>
      </div>
      <div id="right-elements">
        <div>
          <a href="php/profile-edit.php">Profile</a>
          <a href="">My Orders</a>
          <a href="">Past Orders</a>
        </div>
      </div>
    </header>
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
                <input type="text" name="first_name" id="first_name"><br>
                <label for="">Last Name</label><br>
                <input type="text" name="last_name" id="last_name"><br>
              </div>
              <div>
                <label for="">Phone Number</label><br>
                <input type="tel" name="phone_number" id="phone_number"> <br>
                <label for="">Email</label><br>
                <input type="email" name="email" id="email">
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
              <input type="text" name="street" id="street">
            </div>
            <div>
              <label for="estate">Estate/Apartment</label><br>
              <input type="text" name="estate" id="estate"><br>
              <label for="house">House Number/Apartment</label><br>
              <input type="text" name="house" id="house">
            </div>
          </div>
          <h2>Payment Details</h2>
          <div id="payment-details">
            <div>
              <h3>Pay on Delivery</h3>
              <input type="radio" name="" id="">
              <label for="">Cash</label><br>
              <input type="radio" name="" id="">
              <label for="">Mobile Money</label>
            </div>
      
            <div id="payment-details-right">
              <h3>Pay Now</h3>
              <div>
                <input type="radio" name="" id=" ">
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
                  <span>Ksh 1523</span><br>
                  <span>Ksh 70</span><br>
                  <span>Ksh 243</span><br>
                  <h3>Ksh 1836</h3>
              </div>
          </div>
          <div id="buttons">
              <button>Place Order</button>
              <hr>
          </div>
          <div id="order-items">
            <div class="cart-item">
              <div id="cart-item-left">
                <div>
                  <span id="item-heading">Wings Lunchbox</span>
                  <br><br><br>
                  <span>Price</span><br><br>
                  <span>Quantity</span>
                </div>
                <div>
                  <div>
                    <div><span>Ksh 327</span></div>
                    <div>
                    <button onclick="$(this).next()[0].stepDown()" ><span class="iconify" data-icon="icon-park-solid:reduce-one" style="color: #f90;" data-width="16" data-height="16"></span></button>
                    <input value="1" type="number">
                    <button onclick="$(this).prev()[0].stepUp()" ><span class="iconify" data-icon="fluent:add-circle-16-filled" style="color: #f90;" data-width="20" data-height="20"></span></button></div>
                  </div>
                </div>
              </div>
              <div id="cart-item-right">
                <div>
                  <img class="cart-img" src="../assets/wings-lunchbox-removebg-preview.png" alt="">
                </div>
                <div>
                  <button class="remove-button" id="remove-button"><span class="iconify" data-icon="bi:trash" style="color: rgb(99, 48, 26);" data-width="20" data-height="20"></span></button>
                  <span>Remove</span>
                </div>
              </div>
            </div>
            <div class="cart-item">
              <div id="cart-item-left">
                <div>
                  <span id="item-heading">Wings Lunchbox</span>
                  <br><br><br>
                  <span>Price</span><br><br>
                  <span>Quantity</span>
                </div>
                <div>
                  <div>
                    <div><span>Ksh 327</span></div>
                    <div>
                    <button onclick="$(this).next()[0].stepDown()" ><span class="iconify" data-icon="icon-park-solid:reduce-one" style="color: #f90;" data-width="16" data-height="16"></span></button>
                    <input value="1" type="number">
                    <button onclick="$(this).prev()[0].stepUp()" ><span class="iconify" data-icon="fluent:add-circle-16-filled" style="color: #f90;" data-width="20" data-height="20"></span></button></div>
                  </div>
                </div>
              </div>
              <div id="cart-item-right">
                <div>
                  <img class="cart-img" src="../assets/wings-lunchbox-removebg-preview.png" alt="">
                </div>
                <div>
                  <button class="remove-button" id="remove-button"><span class="iconify" data-icon="bi:trash" style="color: rgb(99, 48, 26);" data-width="20" data-height="20"></span></button>
                  <span>Remove</span>
                </div>
              </div>
            </div>
            <div class="cart-item">
              <div id="cart-item-left">
                <div>
                  <span id="item-heading">Wings Lunchbox</span>
                  <br><br><br>
                  <span>Price</span><br><br>
                  <span>Quantity</span>
                </div>
                <div>
                  <div>
                    <div><span>Ksh 327</span></div>
                    <div>
                    <button onclick="$(this).next()[0].stepDown()" ><span class="iconify" data-icon="icon-park-solid:reduce-one" style="color: #f90;" data-width="16" data-height="16"></span></button>
                    <input value="1" type="number">
                    <button onclick="$(this).prev()[0].stepUp()" ><span class="iconify" data-icon="fluent:add-circle-16-filled" style="color: #f90;" data-width="20" data-height="20"></span></button></div>
                  </div>
                </div>
              </div>
              <div id="cart-item-right">
                <div>
                  <img class="cart-img" src="../assets/wings-lunchbox-removebg-preview.png" alt="">
                </div>
                <div>
                  <button class="remove-button" id="remove-button"><span class="iconify" data-icon="bi:trash" style="color: rgb(99, 48, 26);" data-width="20" data-height="20"></span></button>
                  <span>Remove</span>
                </div>
              </div>
            </div>
            <div class="cart-item">
              <div id="cart-item-left">
                <div>
                  <span id="item-heading">Wings Lunchbox</span>
                  <br><br><br>
                  <span>Price</span><br><br>
                  <span>Quantity</span>
                </div>
                <div>
                  <div>
                    <div><span>Ksh 327</span></div>
                    <div>
                    <button onclick="$(this).next()[0].stepDown()" ><span class="iconify" data-icon="icon-park-solid:reduce-one" style="color: #f90;" data-width="16" data-height="16"></span></button>
                    <input value="1" type="number">
                    <button onclick="$(this).prev()[0].stepUp()" ><span class="iconify" data-icon="fluent:add-circle-16-filled" style="color: #f90;" data-width="20" data-height="20"></span></button></div>
                  </div>
                </div>
              </div>
              <div id="cart-item-right">
                <div>
                  <img class="cart-img" src="../assets/wings-lunchbox-removebg-preview.png" alt="">
                </div>
                <div>
                  <button class="remove-button" id="remove-button"><span class="iconify" data-icon="bi:trash" style="color: rgb(99, 48, 26);" data-width="20" data-height="20"></span></button>
                  <span>Remove</span>
                </div>
              </div>
            </div>
            <div class="cart-item">
              <div id="cart-item-left">
                <div>
                  <span id="item-heading">Wings Lunchbox</span>
                  <br><br><br>
                  <span>Price</span><br><br>
                  <span>Quantity</span>
                </div>
                <div>
                  <div>
                    <div><span>Ksh 327</span></div>
                    <div>
                    <button onclick="$(this).next()[0].stepDown()" ><span class="iconify" data-icon="icon-park-solid:reduce-one" style="color: #f90;" data-width="16" data-height="16"></span></button>
                    <input value="1" type="number">
                    <button onclick="$(this).prev()[0].stepUp()" ><span class="iconify" data-icon="fluent:add-circle-16-filled" style="color: #f90;" data-width="20" data-height="20"></span></button></div>
                  </div>
                </div>
              </div>
              <div id="cart-item-right">
                <div>
                  <img class="cart-img" src="../assets/wings-lunchbox-removebg-preview.png" alt="">
                </div>
                <div>
                  <button class="remove-button" id="remove-button"><span class="iconify" data-icon="bi:trash" style="color: rgb(99, 48, 26);" data-width="20" data-height="20"></span></button>
                  <span>Remove</span>
                </div>
              </div>
            </div>
            <div class="cart-item">
              <div id="cart-item-left">
                <div>
                  <span id="item-heading">Wings Lunchbox</span>
                  <br><br><br>
                  <span>Price</span><br><br>
                  <span>Quantity</span>
                </div>
                <div>
                  <div>
                    <div><span>Ksh 327</span></div>
                    <div>
                    <button onclick="$(this).next()[0].stepDown()" ><span class="iconify" data-icon="icon-park-solid:reduce-one" style="color: #f90;" data-width="16" data-height="16"></span></button>
                    <input value="1" type="number">
                    <button onclick="$(this).prev()[0].stepUp()" ><span class="iconify" data-icon="fluent:add-circle-16-filled" style="color: #f90;" data-width="20" data-height="20"></span></button></div>
                  </div>
                </div>
              </div>
              <div id="cart-item-right">
                <div>
                  <img class="cart-img" src="../assets/wings-lunchbox-removebg-preview.png" alt="">
                </div>
                <div>
                  <button class="remove-button" id="remove-button"><span class="iconify" data-icon="bi:trash" style="color: rgb(99, 48, 26);" data-width="20" data-height="20"></span></button>
                  <span>Remove</span>
                </div>
              </div>
            </div>
          </div>
      </section>
    </main>
  </body>
  <script src="js/locator.js"></script>
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/index.js"></script>

</html>