<?php
 session_start();
 if (!isset($_SESSION['cart_items'])) {
    $_SESSION['cart_items'] = array();
 }
?>
