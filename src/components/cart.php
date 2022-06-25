<div class="cart-dropdown">
      <div id="cart-header">
        <div id="close-cart"></div>
      </div>
      <div id="cart-body">
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
              <img class="cart-img" src="../../assets/wings-lunchbox-removebg-preview.png" alt="">
            </div>
            <div>
              <button class="remove-button" id="remove-button"><span class="iconify" data-icon="bi:trash" style="color: rgb(99, 48, 26);" data-width="20" data-height="20"></span></button>
              <span>Remove</span>
            </div>
          </div>
        </div>
      </div>
      <div id="cart-footer">
        <button id="cart-checkout" onclick="window.location.replace('checkout.html')">Checkout</button>
      </div>

    </div>