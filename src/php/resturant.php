 <?php
    include("../components/head.php");
    include('../components/header.php');
    

    $page=$_GET['page'];

    $sql="SELECT * FROM resturants WHERE id=$page";

    
    ?>
  
      <div class="banner">
      </div>
      <div class="band">
          <div>
          <h1>KFC Langata Road</h1>
          <p>Minimum Delivery Fee Ksh 80</p>
          <p>Delivery Time 40 mins</p>
        </div>
        <div><span>Home</span>&nbsp;>&nbsp;<span>Vendors</span>&nbsp;>&nbsp;<span>KFC Langata Road</span></div>
      </div>
      <section class="bottom">
      <div class="filters-side">
        <div class="options">
            <div>
                <span class="active-link">What we are eating</span>
              </div>
          <div>
          <span>Chicken Only</span>
        </div>
        <div>
          <span>Deals</span>
        </div>
        <div>
          <span>New Meals</span>
        </div>
        <div>
          <span>StreetWise Offers</span>
        </div> 
        <div>
            <span>Lunchbox</span>
          </div> 
          <div>
            <span>Sharing Meals</span>
          </div> 
          <div>
            <span>Combo Meals</span>
          </div> 
          <div>
            <span>Burgers</span>
          </div> 
          <div>
            <span>Wraps</span>
          </div> 
          <div>
            <span>Krushers</span>
          </div> 
      </div>
      </div>
      <div class="choices-side">
          <div class="cards-container">
            <div class="card">
              <img src="../assets/nyamanyamaburger.jpg"><br>
              <span>Nyama Nyama Burger</span><br>
              <div><p class="subtext">2 Chicken Fillets, 1 Cheese Slice, <br>1 Hash Brown & Colonel Dressing</p>
              <span><span id="price-label">Ksh 399</> <img class="plus-icon" src="../assets/plus.svg"></span>
            </div>
            </div>
            <div class="card">
                <img src="../assets/chicken-lunchbox.jpg"><br>
                <span>Chicken Lunchbox</span><br>
                <div><p class="subtext">2 pieces regular chicken, regular chips<br>regular coleslaw & 350ml soda</p>
                <span><span id="price-label">Ksh 399</span> <img class="plus-icon" src="../assets/plus.svg"></span>
              </div>
              </div>
              <div class="card">
                <img src="../assets/wings-lunchbox.jpg"><br>
                <span>Wings Lunchbox</span><br>
                <div><p class="subtext">5 pieces zinger wings (hot), regular chips, <br>regular coleslaw & 350ml soda</p>
                <span><span id="price-label">Ksh 367</span> <img class="plus-icon" src="../assets/plus.svg"></span>
              </div>
              </div>
              <div class="card">
                <img src="../assets/crunch-master.jpg"><br>
                <span>Crunch Master</span><br>
                <div><p class="subtext">2 Crunch fillets, double cheese, tomato<br>lettuce, and sweet chilli sauce <br> all wrapped in a tortilla</p>
                <span><span id="price-label">Ksh 690</span> <img class="plus-icon" src="../assets/plus.svg"></span>
              </div>
              </div>
              <div class="card">
                <img src="../assets/chicken-burger-lunchbox.jpg"><br>
                <span>Chicken Burger Lunchbox</span><br>
                <div><p class="subtext">Crunch Burger, regular chips<br>regular coleslaw & 350ml soda</p>
                <span><span id="price-label">Ksh 367</span> <img class="plus-icon" src="../assets/plus.svg"></span>
              </div>
              </div>
              <div class="card">
                <img src="../assets/bazu-burger.jpg"><br>
                <span>Bazu Burger</span><br>
                <div><p class="subtext">Burger Only</p>
                <span><span id="price-label">Ksh 690</span> <img class="plus-icon" src="../assets/plus.svg"></span>
              </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    
</body>
<?php include('../components/scripts.php'); ?>



</html>