<?php
$title = "Ithaca Apple Harvest Festival";
$nav_class = "map_page";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name = "viewport" content="width=device-width, initial-scale=1" />
  <title>Ithaca Apple Harvest Festival</title>
  <link rel="stylesheet" type="text/css" href="public/styles/theme.css" media="all"/>
</head>
<body>
    <?php include("includes/header.php")?>

    <main id="map-content">

      <div class="map" id="map-tablet-mobile">
        <h2>Map:</h2>
        <div class="mobile-map">
          <img src="public/images/map-better-600px.png" alt="Map view, Tablet and Mobile mode">
        </div>
      </div>

      <div class="stand-list">
        <h2>Stands:</h2>
        <div class="food-stand" id="joe">
            <?php include('includes/joe_display.php')?>
        </div>

        <div class="food-stand" id="mary">
                <?php include('includes/mary_display.php')?>
        </div>

        <div class="food-stand" id="donuts">
          <?php include('includes/donuts_display.php')?>
        </div>

        <div class="food-stand" id ="goats">
           <?php include('includes/goats_display.php')?>
        </div>

        <div class="food-stand" id="jenny">
          <?php include('includes/jenny_display.php')?>
        </div>
      </div>

      <div class="map">
        <div id="map-desktop">
          <h2>Map:</h2>
          <div class="desktop-map">
            <img src="public/images/map-better-800px.png" alt="Map view, Desktop mode">
          </div>
        </div>
      </div>

    </main>
    <?php include("includes/footer.php") ?>
  </body>
  </html>
