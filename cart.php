<?php
class Cart {

  public $cart_items = [];
  public $subtotal = 0;
  public $total_number_of_items = 0;

  function __construct() {
    $this->cart_items = $_SESSION['cart_items'];
  }


  public function subtotal($conn) {
    if ($this->subtotal == 0){
      foreach ($this->cart_items as $cart_item) {
        $pizza = Pizza::find($conn, $cart_item['product']);
        $this->subtotal += $pizza->price * $cart_item['quantity'];
      }
    }
    return $this->subtotal;
  }

  public function total_number_of_items(){
    if ($this->total_number_of_items == 0){
      foreach ($this->cart_items as $cart_item) {
        $this->total_number_of_items += $cart_item['quantity'];
      }
    }
    return $this->total_number_of_items;
  }

  public function empty_cart() {
    unset($_SESSION['cart_items']);
  }



}
