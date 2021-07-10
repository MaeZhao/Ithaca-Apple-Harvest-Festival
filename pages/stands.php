<?php
$title = "Ithaca Apple Harvest Festival";
$nav_class = "stands_page";

// form CSS classes
$show_form = True;
$show_confirmation = False;

// feedback message CSS classes
$menu_feedback_class='hidden';
$phone_feedback_class='hidden';
$card_feedback_class='hidden';
$fname_feedback_class='hidden';
$lname_feedback_class='hidden';
$date_feedback_class='hidden';
$zip_feedback_class='hidden';
$cvc_feedback_class='hidden';

// transaction values
$phone='';
$card='';
$fname='';
$lname='';
$date='';
$zip='';
$cvc='';


// Joe's Cider values
$straw='0';
$blue='0';
$class='0';

// sticky transaction values
$sticky_phone='';
$sticky_card='';
$sticky_fname='';
$sticky_lname='';
$sticky_date='';
$sticky_zip='';
$sticky_cvc='';

// Joe's Cider sticky values
$sticky_straw='0';
$sticky_blue='0';
$sticky_class='0';

// Did the user submit the form?
if (isset($_POST["submit"])) {

  // Get HTTP request user data (transaction data)
  $phone = $_POST["telephone"]; // untrusted
  $card = $_POST["card_number"]; // untrusted
  $fname = $_POST["first_name"]; // untrusted
  $lname = $_POST["last_name"]; // untrusted
  $date = $_POST["exp_date"]; // untrusted
  $zip = $_POST["zip"]; // untrusted
  $cvc = $_POST["cvc"]; // untrusted

// Get HTTP request user data (Joe's Cider)
  $straw = $_POST["straw_cider"]; // untrusted
  $blue = $_POST["blue_cider"]; // untrusted
  $class = $_POST["class_cider"]; // untrusted

  $form_valid = TRUE;

  // Did user order anything? (Joe's Cider)
  if (($blue==0) && ($straw==0) && ($class==0)){
    $form_valid=FALSE;
    $menu_feedback_class='';
  }

  // phone is required. Is it empty?
  if (empty($phone)){
    $form_valid=FALSE;
    $phone_feedback_class='';
  }

  // card is required. Is it empty?
  if (empty($card)){
    $form_valid=FALSE;
    $card_feedback_class='';
  }
  // first name is required. Is it empty?
  if (empty($fname)){
    $form_valid=FALSE;
    $fname_feedback_class='';
  }
  // last name is required. Is it empty?
  if (empty($lname)){
    $form_valid=FALSE;
    $lname_feedback_class='';
  }
  // date is required. Is it empty?
  if (empty($date)){
    $form_valid=FALSE;
    $date_feedback_class='';
  }
  // zip is required. Is it empty?
  if (empty($zip)){
    $form_valid=FALSE;
    $zip_feedback_class='';
  }
  // cvc is required. Is it empty?
  if (empty($cvc)){
    $form_valid=FALSE;
    $cvc_feedback_class='';
  }

  if ($form_valid) {
    // form is valid, hide form, show confirmation page
    $show_form = false;
    $show_confirmation = true;
  } else {
    // form is invalid, set sticky values
    // set Joe's Cider sticky values
    $sticky_blue = $blue; // tainted
    $sticky_straw = $straw; // tainted
    $sticky_class= $class; // tainted

    // set transaction sticky values
    $sticky_phone=$phone;
    $sticky_card=$card;
    $sticky_fname=$fname;
    $sticky_lname=$lname;
    $sticky_date=$date;
    $sticky_zip=$zip;
    $sticky_cvc=$cvc;

  }
}
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

    <main >
      <div class="stand-list">
        <div class="food-stand" id="order_joe">
         <?php include('includes/joe_display.php')?>
        <?php if ($show_confirmation) { ?>
          <div class="confirmation_feedback">
            <h2>Confirmation</h2>
            <p>Thank you for your order <?php echo htmlspecialchars($fname)?>, We will call/text you at <?php echo htmlspecialchars($phone)?> when your order is ready at about 12:33PM</p>
            <p><a href="stands">Place Another Order >></a> </p>
            </div>
        <?php } ?>

        <?php if ($show_form) { ?>
          <details open> <summary >Order for Pickup Now</summary>
            <form class="order "  action="stands" method="post" novalidate>

              <div class="menu">
                <h3>Menu</h3>
                <div class="item">
                  <div>
                    <label class="food_name" for="straw_cider">1L Strawberry Cider</label>
                    <div class="food_price"><p>$10</p></div>
                  </div>
                  <input class="food_quantity" min="0" type="number" name="straw_cider"
                  id="straw_cider"  value="<?php echo htmlspecialchars($sticky_straw); ?>">
                </div>
                <div class="item">
                  <div>
                    <label class="food_name" for="blue_cider">1L Blueberry Cider</label>
                    <div class="food_price"><p>$5</p></div>
                  </div>
                  <input class="food_quantity" min="0" type="number" name="blue_cider"
                  id="blue_cider"  value="<?php echo htmlspecialchars($sticky_blue); ?>">
                </div>
                <div class="item">
                  <div>
                    <label class="food_name" for="class_cider">1L Classic Cider</label>
                    <div class="food_price"><p>$5</p></div>
                  </div>
                  <input class="food_quantity" min="0" type="number" name="class_cider"
                  id="class_cider"  value="<?php echo htmlspecialchars($sticky_class); ?>">
                </div>
                <div  class="error_message <?php echo $menu_feedback_class; ?>">
                  Please order at least one item.
                </div>
              </div>
                <div class="phone">
                  <label for="telephone">Telephone Number:</label>
                  <input type="tel" id="telephone" name="telephone"  value="<?php echo htmlspecialchars($sticky_phone); ?>" required>
                </div>
                <div id="error-telephone" class="error_message <?php echo $phone_feedback_class; ?>">
                  Please enter your phone number.
                </div>

              <div class="credit">
                <h3 class="card">Credit Card Information:</h3>
                <div>
                  <label class="card" for="card_number">Card Number:</label>
                  <input class="card" type="text" name="card_number" id="card_number"  value="<?php echo htmlspecialchars($sticky_card); ?>">
                </div>
                <div id="error-card" class="error_message card_message <?php echo $card_feedback_class; ?>">
                  Please enter your credit card number.
                </div>
                <div>
                  <label class="card" for="first_name">First Name:</label>
                  <input class="card" type="text" name="first_name" id="first_name"  value="<?php echo htmlspecialchars($sticky_fname); ?>">
                </div>
                <div id="error-fname" class="error_message <?php echo $fname_feedback_class; ?> card_message">
                  Please enter your first name.
                </div>
                <div>
                  <label class="card" for="last_name">Last Name:</label>
                  <input class="card" type="text" name="last_name" id="last_name"  value="<?php echo htmlspecialchars($sticky_lname); ?>" >
                </div>
                <div id="error-lname" class="error_message <?php echo $lname_feedback_class; ?> card_message">
                  Please enter your last name.
                </div>
                <div>
                  <label class="card" for="exp_date">Expiration Date:</label>
                  <input class="card" type="date" name="exp_date" id="exp_date"  value="<?php echo htmlspecialchars($sticky_date); ?>">
                </div>
                <div id="error-exdate" class=" card_message error_message <?php echo $date_feedback_class; ?>">
                  Please enter your expiration date.
                </div>
                <div>
                  <label class="card" for="zip">Zip Code:</label>
                  <input class="card" type="text" name="zip" id="zip"  value="<?php echo htmlspecialchars($sticky_zip); ?>">
                </div>
                <div id="error-zip" class="error_message <?php echo $zip_feedback_class; ?> card_message">
                  Please enter your zip code.
                </div>
                <div>
                  <label class="card" for="cvc">CVC:</label>
                  <input class="card" type="password" name="cvc" id="cvc"  value="<?php echo htmlspecialchars($sticky_cvc); ?>">
                </div>
                <div id="error-cvc" class="error_message <?php echo $cvc_feedback_class; ?> card_message">
                  Please enter your cvc number.
                </div>
              </div>

              <div class="submit_button">
                <button type="submit" name="submit"> Order Now </button>
              </div>
            </form>
          </details>
        <?php } ?>
        </div>

        <div class="food-stand">
            <?php include('includes/mary_display.php')?>
        </div>

        <div class="food-stand">
          <?php include('includes/donuts_display.php')?>
        </div>

        <div class="food-stand">
            <?php include('includes/goats_display.php')?>
        </div>

        <div class="food-stand">
           <?php include('includes/jenny_display.php')?>
        </div>
      </div>
    </main>
    <?php include("includes/footer.php") ?>
  </body>
  </html>
