<?php
//Datenbank anbindung
$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br />";

mysqli_select_db($conn, $database);

echo "Datenbank ausgewählt!<br />";
//Datenbank anbindung


//Beispiel
echo "<br />Beispiel<br />";
$sql = "Select * from customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo $result->num_rows . " Resultate<br />";
}
else {
    echo "Keine Resultate vorhanden";
}

//Aufgabe 1
echo "<br />Aufgabe 1<br />";
if ($result->num_rows > 0) {
    echo $result->num_rows . " Resultate<br />";

    dump($result);

    echo "<br />";
}
else {
    echo "Keine Resultate vorhanden";
}


//Aufgabe 2
echo "<br />Aufgabe 2<br />";
$sql2 = "Select * from customers WHERE job_title = 'Purchasing Representative'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    echo $result2->num_rows . " Resultate<br />";

    dump($result2);

    echo "<br />";
}
else {
    echo "Keine Resultate vorhanden";
}

//Datenausgabe
echo "<br />Datenausgabe<br />";
while ($record = mysqli_fetch_assoc($result)){
    dump($record);
}


//Funktion für VarDump
function dump($args): void
{
    echo "<pre>";
    var_dump($args);
    echo "<pre/>";
}


mysqli_close($conn);