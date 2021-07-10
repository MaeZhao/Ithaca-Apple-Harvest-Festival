 <div class="stand-header">
            <h2>Jenny's Cold Stone Ice Cream and Fried Dough<?php
            if ($nav_class=="map_page") {?>
                    <img src="public/images/map-ice-cream.png" alt="Jenny's Cold Stone Ice Cream and Fried Dough map marker">
                    <!-- Source: https://www.flaticon.com/free-icon/ice-cream_938114?term=ice%20cream&page=1&position=8&related_item_id=938114-->
            <?php } ?> </h2>
            <div class="logo">
              <!-- Source: https://www.flaticon.com/free-icon/ice-cream_938114?term=ice%20cream&page=1&position=8&related_item_id=938114-->
              <img src="public/images/ice-cream-100px.png" alt="Jenny's Cold Stone Ice Cream and Fried Dough shop logo">

            </div>
          </div>
          <p>Come to Jenny's to enjoy a variety of delicious ice cream flavors with a side of hot fried dough!</p>
          <p>Located: 114 W State St, Ithaca, NY 14850</p>
<?php
if ($nav_class=="map_page" || $nav_class=="stands_page") {?>
          <p>Time from Green Street TCAT Bus Stop: 4 min</p>
          <p>Wait time: 0 min</p>
          <?php
          if ($nav_class=="map_page") {?>
              <p ><a href="#map-content" class="map-jump">
                <h3>Jump to map  ^ </h3>
                </a></p>
          <?php } ?>
<?php } ?>


<?php
if ($nav_class=="stands_page") {?>
            <a href="map#jenny">
            <h3>View on map >> </h3>
          </a>
<?php } ?>
