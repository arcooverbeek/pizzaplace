<?php
// Require connection
require 'conn.php';

$pizzas = $conn->prepare("SELECT * FROM pizzas");
$pizzas->execute();
$results = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
?>
<table>
  <tbody>
    <?php foreach($pizzas as $key=>$getpizza) {?>
    <tr>
      <td>
        <h3><?php echo $pizza['name']; ?></h3>
        <p><?php echo $pizza['description']; ?></p>
        <p><b>€ <?php echo $pizza['price']; ?>,-</b></p>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>