<?php

session_start();
include("config.php");
include("../components/head.php");
?>
 <?php  include('../components/header.php');?>
      <div id="carousel">
          <div class="carousel-item deals">Today's Deals</div>
          <div class="carousel-item bread">
              <img carousel-item-img src="../../assets/bread-deal.png" alt="">
          </div>
          <div class="carousel-item kfc" >
            <img class="carousel-item-img" src="../../assets/burger-deal.png" >
          </div>
      </div>
      <section class="bottom">
      <div class="filters-side">
        <h1>Filter</h1>
        <div class="options">
          <div>
          <input type="radio" name="group-1" id="most-popular"><label for="most-popular">Most Popular</label>
        </div>
        <div>
          <input type="radio" name="group-1" id=""><label for="">Delivery Speed</label>
        </div>
        <div>
          <input type="radio" name="group-1" id=""><label for="">Rating</label>
          <br><br><br>
        </div>
          <div>
          <input type="radio" name="group-2" id=""><label for="">Deals</label>
        </div>
        <div>
          <input type="radio" name="group-2" id=""><label for="">Free Delivery</label><br><br>
        </div>
          <label for="">Price Range</label>
          <input type="range" name="group-2" id="slider">
          <span>$&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;$$$$</span> 
      </div>
      </div>
      <div class="choices-side">
        <div id="top">
          <h1>Spots Near Me</h1>
          <div class="cards-container">
            <?php
                $count=0;
                $sql='SELECT * FROM resturants';
                $result=mysqli_query($conn,$sql);
            while($res=mysqli_fetch_assoc($result)){
              if($count>3){
                break;
              }
              else{
                echo "<form action='resturant.php' method='GET'>
                <div class='card'>
                 <img src=".$res['image']."><br>
                 <span>".$res['name']."</span><br>
                 <span class='subtext'>".$res['tags']."</span>
                 <input class='hidden' type='submit' id='redirect' value='".$res['id']."' name='page'>
              </div>
              </form>";
              $count+=1;
              }
            }
              ?>
          </div>
        </div>
        <div id="bottom">
          <h1>Love Chicken? You'll love these</h1>
          <div class="cards-container">
          <?php

          $sql="SELECT * FROM resturants WHERE food_served='chicken'";

          $result=mysqli_query($conn,$sql);

          while($res=mysqli_fetch_assoc($result)){
            echo "<form action='resturant.php' method='GET'>
            <div class='card'>
            <img src=".$res['image']."><br>
            <span>".$res['name']."</span><br>
            <span class='subtext'>".$res['tags']."</span>
            <input class='hidden' type='submit' id='redirect' value='".$res['id']."' name='page'>
            </div>
            </form>";
            }
            ?>
          </div>
        </div>
      </div>
    </section>
    
</body>
<?php include('../components/scripts.php'); ?>
</html>