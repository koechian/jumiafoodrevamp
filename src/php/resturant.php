 <?php
    include("config.php");
    include("../components/head.php");
    include('../components/header.php');
    

    $page=$_GET['page'];
    $sql="SELECT * FROM resturants WHERE id=$page";
    $result=mysqli_query($conn,$sql);
  
    ?>
      <div style="background-image: url(<?php 
      $res=mysqli_fetch_assoc($result);
      echo $res['cover_image'];

       ?>)" class="banner">
      </div>
      <div class="band">
        <?php
           echo "<div>
            <h1>".$res['name']."</h1>
            <p>Minimum Delivery Fee Ksh ".$res['delivery_fee']."</p>
            <p>Delivery Time ".$res['delivery_time']." mins</p>
            </div>";
        ?>
        <div><span>Home</span>&nbsp;>&nbsp;<span>Vendors</span>&nbsp;>&nbsp;<span><? echo $res['name']?></span></div>
      </div>
      <section class="bottom">
      <div class="filters-side">
        
      </div>
      <div class="choices-side">
          <div class="cards-container">
            <?php 

            $sql="SELECT * FROM menu WHERE resturant_id=$page"; 
            $result=mysqli_query($conn,$sql);

            while($res=mysqli_fetch_assoc($result)){
              echo " <div class='card'>
              <img src='".$res['product_image']."'><br>
              <span>".$res['product_name']."</span><br>
              <div><p class='subtext'>".$res['description']."</p>
              <span><span id='price-label'>Ksh".$res['product_price']."</span> <img data-id='".$res['id']."' class='add-to-cart plus-icon' src='../../assets/plus.svg'></span>
            </div>
            </div>";
           
          }

?>
          </div>
        </div>
      </div>
    </section>
    
</body>
<?php include('../components/scripts.php'); ?>



</html>