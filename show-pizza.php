<?php
  require 'includes/init.php';
  require 'conn.php';
  require 'pizza.php';

  require 'functions.php';
?>
<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pizza Place - Mario</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        <h1>I'll take you to the pizza shop <small>I'll let you lick the lollipop</small></h1>
      </div>
      <?php
        if (isset($_GET['pizza_id'])) {

          $pizza = Pizza::find($conn, $_GET['pizza_id']);


          $quantity = array_key_exists($_GET['pizza_id'], $_SESSION['cart_items']) ? $_SESSION['cart_items'][$_GET['pizza_id']]['quantity'] : 1;

        }
      ?>
      <div class="media">
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="images/pizzas/<?php echo slug($pizza->name); ?>.jpg" alt="...">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $pizza->name; ?></h4>
          <p><?php echo $pizza->description; ?></p>
          <strong class="pull-right" style="font-size: 25px;">€ <?php echo $pizza->price; ?>,-</strong>
          <form method="POST" action="cart.php">
            <label>Aantal van deze pizza</label>

            <input type='hidden' name='product_id' value="<?php echo $_GET['pizza_id']; ?>">
            <input type="number" name='quantity' value="<?php echo $quantity;  ?>" id="quantity-input">
            <input type="submit" name='add-from-show' value="In winkelmand" id='add-to-cart' class="btn btn-primary btn-lg pull-right">
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
