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

//Datenausgabe
echo "<br> <h2>Datenausgabe:</h2>";
$statement = $conn->prepare("SELECT * FROM customers");
$statement->execute();
while($row = $statement->fetch()) {
    echo $row['first_name']." ".$row['last_name']."<br />";
}