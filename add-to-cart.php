<?php
  session_start();
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
      /* special ajax here */
      die('kutzooi');
    }

    if (isset($_POST['product_id']) && isset($_POST['quantity'])) {

      $cart_item = ['product' => $_POST['product_id'], 'quantity' => $_POST['quantity']];
      $_SESSION['cart_items'][$_POST['product_id']] = $cart_item;

      if (array_key_exists('add-from-show', $_POST)) {
        header("location: show-pizza.php?pizza_id=" . $_POST['product_id']);
      } else {
        header("location: show-cart.php");
      }
    }
  }
?>
