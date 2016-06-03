<?php
  require 'conn.php';
  require 'pizza.php';
  require 'cart.php';
  require 'includes/init.php';
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">PizzaPlace</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Pizza's <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Contact</a></li>
          <li>
            <a href="show-cart.php">
              Mandje
              <?php echo price($cart->subtotal($conn)); ?>

              <i id='cart-icon' class="fa fa-shopping-basket" aria-hidden="true">
                <span class="amount" id='total-number-of-items'><?php echo $cart->total_number_of_items(); ?></span>
              </i>
            </a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container">
    <div class="page-header">
      <h1>I'll take you to the pizza shop <small>I'll let you lick the lollipop</small></h1>
    </div>
