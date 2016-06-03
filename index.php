<?php include 'header.php'; ?>
<div class="row">
<?php
  $pizzas = Pizza::getAll($conn);
  while ($pizza = $pizzas->fetch(PDO::FETCH_ASSOC)) : ?>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="images/pizzas/<?php echo slug($pizza['name']); ?>.jpg" alt="afbeelding van <?php echo $pizza['name']; ?>">
        <div class="caption">
          <h3><?php echo $pizza['name']; ?></h3>
          <p><?php echo $pizza['description']; ?></p>
          <p>€ v.a. <?php echo $pizza['price']; ?>,-</p>
          <p>
            <a href="show-pizza.php?pizza_id=<?php echo $pizza['id']; ?>" class="btn btn-primary" role="button">Bekijk pizza</a>
          </p>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>
<?php include 'footer.php'; ?>
