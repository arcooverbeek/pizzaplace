<?php include 'header.php'; ?>
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
    <div id="pizza-description">
      <button class="btn btn-primary" id="toggle-description">Lees Omschrijving</button>
      <p class="description">
        <?php echo $pizza->description; ?>
      </p>
    </div>






    <strong class="pull-right" style="font-size: 25px;">€ <?php echo $pizza->price; ?>,-</strong>
    <form method="POST" action="add-to-cart.php">
      <label>Aantal van deze pizza</label>
      <input type='hidden' name='product_id' value="<?php echo $_GET['pizza_id']; ?>">
      <input type="number" name='quantity' value="<?php echo $quantity;  ?>" id="quantity-input">
      <button type="submit" name='add-from-show' id='add-to-cart' class="btn btn-primary btn-lg pull-right"><i class="fa fa-plus-square" aria-hidden="true"></i>In winkelmand
</button>
    </form>
  </div>
</div>
<?php include 'footer.php'; ?>
