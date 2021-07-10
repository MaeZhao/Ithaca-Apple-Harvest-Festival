
            <div class="stand-header">
            <!-- Source: (original work with the use of Microsoft Powerpoint) Mae Zhao-->
            <h2>Mary's Apples<img class="hot-img" src="public/images/hot-50px.png" alt="popular stand stamp">
          <?php
            if ($nav_class=="map_page") {?>
                    <img src="public/images/map-mary.png" alt="Mary's Apples map marker">
                    <!-- Source: https://www.flaticon.com/free-icon/ice-cream_938114?term=ice%20cream&page=1&position=8&related_item_id=938114-->
            <?php } ?></h2>
            <div class="logo">
              <!-- Source: https://www.flaticon.com/free-icon/fruit_3649146?term=apples&page=1&position=71 -->
              <img src="public/images/apples-100px.png" alt="Mary's Apples shop logo">
            </div>
          </div>
          <p>Come to Mary's Apples to buy a wide variety of apples and other home-made goods! Located at Ithaca Festival</p>
          <p>Located: 140 E State St, Ithaca, NY 14850</p>
<?php
if ($nav_class=="map_page" || $nav_class=="stands_page") {?>
         <p>Time from Green Street TCAT Bus Stop: 5 min</p>
         <p>Wait time: 5 min</p>
         <?php
          if ($nav_class=="map_page") {?>
              <p ><a href="#map-content" class="map-jump">
                <h3>Jump to map  ^ </h3>
                </a></p>
          <?php } ?>

<?php } ?>


<?php
if ($nav_class=="home_page" || $nav_class=="stands_page") {?>
           <a href="map#mary">
            <h3>View on map >> </h3>
          </a>
<?php } ?>
