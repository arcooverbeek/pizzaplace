<?php
  require 'includes/init.php';
  require 'pizzas.php';
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
      <div class="row">
        <?php
          if ( sizeof($_SESSION['cart_items']) == 0 ) {

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
                  <tr>
                    <td><?php echo $pizzas[$cart_item['product']]['name']; ?></td>
                    <td><?php echo $cart_item['quantity']; ?></td>
                    <td><?php echo $pizzas[$cart_item['product']]['price']; ?></td>
                    <td><?php echo $pizzas[$cart_item['product']]['price'] * $cart_item['quantity']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
        <?php
        }
        ?>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
