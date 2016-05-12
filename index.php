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
        <?php foreach ($pizzas as $key => $pizza) : ?>
          <div class="col-md-4">
            <div class="thumbnail">
              <img src="images/pizzas/<?php echo slug($pizza['name']); ?>.jpg" alt="afbeelding van <?php echo $pizza['name']; ?>">
              <div class="caption">
                <h3><?php echo $pizza['name']; ?></h3>
                <p><?php echo $pizza['description']; ?></p>
                <p>€ v.a. <?php echo $pizza['price']; ?>,-</p>
                <p>
                  <a href="show-pizza.php?pizza_id=<?php echo $key; ?>" class="btn btn-primary" role="button">Bekijk pizza</a>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
