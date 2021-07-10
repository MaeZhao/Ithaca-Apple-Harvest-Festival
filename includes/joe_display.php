
          <div class="stand-header">
            <!-- Source: (original work with the use of Microsoft Powerpoint) Mae Zhao-->
            <h2>Joe's Cider<img class="hot-img" src="public/images/hot-50px.png" alt="popular stand stamp">
            <?php if ($nav_class=="map_page") {?>
            <img src="public/images/map-joe.png" alt="Joe's Cider map marker">
              <?php } ?>
            <!-- Source: https://www.flaticon.com/free-icon/ice-cream_938114?term=ice%20cream&page=1&position=8&related_item_id=938114--></h2>
            <div class="logo">
              <!-- Source: https://www.flaticon.com/free-icon/cider_1206330?related_item_id=1206330&term=cider -->
              <img src="public/images/cider-100px.png" alt="Joe's Cider shop logo">

            </div>
          </div>
          <p>Come to Joe's Cider for hand-made apples and apple cider! Located at Ithaca Festival</p>
          <p>Located: 144 E State St, Ithaca, NY 14850</p>

<?php
if ($nav_class=="map_page" || $nav_class=="stands_page") {?>
         <p>Time from Green Street TCAT Bus Stop: 3 min</p>
         <p>Wait time: 30 min</p>
         <?php
          if ($nav_class=="map_page") {?>
              <p ><a href="#map-content" class="map-jump">
                <h3>Jump to map ^ </h3>
                </a></p>
          <?php } ?>

<?php } ?>


<?php
if ($nav_class=="home_page" || $nav_class=="stands_page") {?>
          <a href="map#joe">
            <h3>View on map >> </h3>
          </a>

<?php } ?>


<?php
if ($nav_class=="map_page" || $nav_class=="home_page") {?>
           <a href="stands#order_joe">
            <h3>Order for pickup >> </h3>
          </a>

<?php } ?>
