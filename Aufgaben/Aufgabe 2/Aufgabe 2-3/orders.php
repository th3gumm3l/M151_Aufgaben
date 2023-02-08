<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br> <br>";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
}

$customerId = $_GET['id'];
$sql = "SELECT * FROM orders WHERE customer_id = :id";


$statement = $conn->prepare($sql);
$statement->execute([
    ":id" => $customerId
]);

?>

<a href="aufgabe2-3.php">Zurück</a>

<h2>Orders:</h2>
<table>
    <tr>
        <th>Ship Name</th>
        <th>Order Date</th>
        <th>Shipped Date</th>
        <th>Ship City</th>
    </tr>
    <?php
    while($row = $statement->fetch()){

        echo "<tr>";
        echo "<td>{$row['ship_name']}</td>";
        echo "<td>{$row['order_date']}</td>";
        echo "<td>{$row['shipped_date']}</td>";
        echo "<td>{$row['ship_city']}</td>";
        echo "<td><a href='deleteOrder.php?id={$row['id']}'>Löschen</a></td>";
        echo "</tr>";
    }
    ?>
</table>
