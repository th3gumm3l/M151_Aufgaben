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

$sql = "INSERT INTO Customers(company, last_name, first_name, email_adress) VALUES (:company, :last_name, :first_name, :email_address)";

$statement = $conn->prepare($sql);
$statement->execute();
?>

<form method="POST" action="add.php">
    <input type="text" name="company" placeholder="company"><br>
    <input type="text" name="last_name" placeholder="last_name"><br>
    <input type="text" name="first_name" placeholder="first_name"><br>
    <input type="email" name="email_address" placeholder="email_address"><br>
    <button type="submit">Hinzufügen</button>
</form>
