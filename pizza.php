<?php
class Pizza {

  public $name;
  public $description;
  public $price;

  public static function getAll($conn) {
    $result = $conn->query("SELECT * FROM pizzas");
    return $result;
  }

  public static function find($conn, $id) {
    $sql = "SELECT * FROM pizzas WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchObject(__CLASS__);
  }

  public function save($conn) {
    $stmt = $conn->prepare("INSERT INTO pizzas (name, description, price) VALUES (:name, :description, :price)");

    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':description', $this->description);
    $stmt->bindParam(':price', $this->price);

    $result = $stmt->execute();

    return $result;
  }

}
?>
