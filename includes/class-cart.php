<?php
class Cart
{

  public $cart_items = array();


  function __construct() {
    get_cart_from_session()
  }


  public function get_cart_from_session() {
    // hier halen we producten en aantallen uit de sessie
  }

}

?>
