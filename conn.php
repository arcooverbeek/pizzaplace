<?php
try {
$conn = new PDO('mysql:host=localhost;dbname=pizzaplace', 'web', 'web1234');
} catch (PDOException $e) {
  echo 'Message: ' .$e->getMessage();
}
?>
