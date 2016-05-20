<?php
  require 'pizza.php';

  try {
    $conn = new PDO('mysql:host=localhost;dbname=pizzaplace', 'web', 'web1234');
  } catch (PDOException $e) {
    echo 'Message: ' .$e->getMessage();
  }

  $all_pizzas = Pizza::getAll($conn);

  var_dump($all_pizzas);

  $new_pizza = new Pizza('Lekkah', 'Lekkahrah pizza', 14.95);

  $result_of_save = $new_pizza->save($conn);

  var_dump($result_of_save);

?>
