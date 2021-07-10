<?php
$title = "Ithaca Apple Harvest Festival";
$nav_class = "home_page";
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

    <div class="banner">
      <div class="banner-content">
        <h2>Celebrate local seasonal foods and culture.</h2>
        <p>Come to Apple fest on <em>Tuesday 10/30/2020</em> from <em>12:00PM to 6:30PM</em> in the Ithaca Commons!</p>
      </div>
    </div>
    <main >
      <div class="stand-list">
        <h2>Check out some of our popular stands:</h2>

        <div class="food-stand">
          <?php include('includes/joe_display.php')?>
        </div>

        <div class="food-stand">
           <?php include('includes/mary_display.php')?>
        </div>

        <div class="food-stand">
          <?php include('includes/donuts_display.php')?>
      </div>
    </main>
    <?php include("includes/footer.php") ?>
  </body>
  </html>
