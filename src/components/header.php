<header>
    <?php include('cart.php'); ?>
    <div id="left-elements">
        <img onclick="window.location.replace('landing.php')" class="logo" src="../../assets/jumiafood-logo.svg" />
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
        <a href="../php/profile-edit.php"><?php echo $userdata[0]['firstname']?></a>
        <a href="history.php">Past Orders</a>
      </div>
      <div data-after='' id="cart">
        <img class="cart-icon icon"  src="../../assets/shopping-cart.svg" alt="" srcset="" />
      </div>
    </div>
  </header>