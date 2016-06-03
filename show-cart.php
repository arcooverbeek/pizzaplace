<?php include 'header.php'; ?>
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
  ?>
</div>
<?php include 'footer.php'; ?>
