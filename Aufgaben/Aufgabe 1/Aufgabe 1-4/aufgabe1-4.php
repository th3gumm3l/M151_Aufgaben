<?php
$username = $_GET['username'];

echo "Hallo {$username}!<br />";

if ($_GET['age']) {
    $age = $_GET['age'];
    echo "Du bist {$age} Jahre alt.";
}

// Dabei muss beim Aufrufen folgende Zeilen angefügt werden, damit die richtigen Parameter aufgerufen werden

// ?username=tim&age=19