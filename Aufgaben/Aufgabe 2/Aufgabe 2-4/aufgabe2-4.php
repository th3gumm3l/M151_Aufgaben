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

$sql = "SELECT * FROM customers";

$statement = $conn->prepare($sql);
$statement->execute();
?>

<h2>Datenausgabe:</h2>

<a href="add.php">Benutzer hinzufügen</a>

<table>
    <tr>
        <th>Company</th>
        <th>Nachname</th>
        <th>Vorname</th>
        <th>Email-Adresse</th>
    </tr>
    <?php
    foreach($conn->query($sql) as $row){

        echo "<tr>";
        echo "<td>{$row['company']}</td>";
        echo "<td>{$row['last_name']}</td>";
        echo "<td>{$row['first_name']}</td>";
        echo "<td>{$row['email_address']}</td>";
        echo "<td><a href='edit.php?id={$row['id']}'>Bearbeiten</a></td>";
        echo "</tr>";
    }
    ?>
</table>