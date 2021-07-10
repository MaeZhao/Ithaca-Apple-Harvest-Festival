
            <div class="stand-header">
            <h2>Ithaca Goats and More! <?php
            if ($nav_class=="map_page") {?>
                    <img src="public/images/map-goats.png" alt="Ithaca Goats and More! map marker">
                    <!-- Source: https://www.flaticon.com/free-icon/ice-cream_938114?term=ice%20cream&page=1&position=8&related_item_id=938114-->
            <?php } ?></h2>
            <div class="logo">
              <!-- Source: https://www.flaticon.com/free-icon/goat_616548 -->
              <img src="public/images/goat-100px.png" alt="Ithaca Goats and More! shop logo">

            </div>
          </div>
          <p>Come to Ithaca Goats to taste artisan goat cheese, milk and more from Ithaca's local goats!</p>
          <p>Located: 140 E State St, Ithaca, NY 14850</p>

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
            <a href="map#goats">
            <h3>View on map >> </h3>
            </a>
<?php } ?>
