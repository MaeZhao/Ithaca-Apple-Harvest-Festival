
            <div class="stand-header">
            <!-- Source: (original work with the use of Microsoft Powerpoint) Mae Zhao-->
            <h2>Donuts and More!<img class="hot-img" src="public/images/hot-50px.png" alt="popular stand stamp">
            <?php if ($nav_class=="map_page") {?>
            <img src="public/images/map-donuts.png" alt="Donuts and More! map marker">
            <!-- Source: https://www.flaticon.com/free-icon/ice-cream_938114?term=ice%20cream&page=1&position=8&related_item_id=938114-->
              <?php } ?></h2>
            <div class="logo">
              <!-- Source: https://www.flaticon.com/free-icon/donut_2836520 -->
              <img src="public/images/donut-100px.png" alt="Donuts and More! shop logo">

            </div>
          </div>
          <p>Come to Donuts and More at Ithaca Apple Harvest Festival to enjoy a wide variety of seasonal donuts.</p>
          <p>Located: 110 E State St, Ithaca, NY 14850</p>
<?php
if ($nav_class=="map_page" || $nav_class=="stands_page") {?>
         <p>Time from Green Street TCAT Bus Stop: 10 min</p>
         <p>Wait time: 3 min</p>
         <?php
          if ($nav_class=="map_page") {?>
              <p ><a href="#map-content" class="map-jump">
                <h3>Jump to map  ^ </h3>
                </a></p>
          <?php } ?>

<?php } ?>


<?php
if ($nav_class=="home_page" || $nav_class=="stands_page") {?>
           <a href="map#donuts">
            <h3>View on map >> </h3>
          </a>
<?php } ?>
