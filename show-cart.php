<?php
  require 'includes/init.php';
  require 'conn.php';
  require 'pizza.php';
  require 'cart.php';
  require 'functions.php';

  $cart = new Cart();
  setlocale(LC_MONETARY, 'nl_NL');
  echo  money_format('%i', $cart->subtotal($conn));
  var_dump($cart->total_number_of_items());

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
      <div class="row">
        <?php
          if ( $cart->total_number_of_items == 0 ) {

            ?>
            <div class='text-center'>
              <h3>Sukkel niks in je kar!</h3>
              <a href="index.php" class='btn btn-primary'>Winkelen met je gertie!</a>
            </div>

            <?php
          } else {
            ?>
            <table class='table'>
              <thead>
                <tr>
                  <th>Product naam</th>
                  <th>Aantal</th>
                  <th>Prijs per stuk</th>
                  <th>Totaal</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($_SESSION['cart_items'] as $cart_item) : ?>
                  <?php $pizza = Pizza::find($conn, $cart_item['product']); ?>
                  <tr>
                    <td><a href="show-pizza.php?pizza_id=<?php echo $pizza->id; ?>"><?php echo $pizza->name; ?></a></td>
                    <td><?php echo $cart_item['quantity']; ?></td>
                    <td><?php echo $pizza->price; ?></td>
                    <td><?php echo $pizza->price * $cart_item['quantity']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        <?php
        }
        // $cart->empty_cart();
        ?>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
