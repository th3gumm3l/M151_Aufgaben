<?php
session_start();    //Neue Session wird gestartet

$anzahl_aufrufe = 1;
if (isset($_SESSION['anzahl_aufrufe'])) {       //Prüfe ob es bereits eine gespeicherte anzahl aufrufe gibt
    $anzahl_aufrufe = $_SESSION['anzahl_aufrufe'];
}

echo "Die Seite wurde {$anzahl_aufrufe}x aufgerufen.";

$anzahl_aufrufe++;
$_SESSION['anzahl_aufrufe'] = $anzahl_aufrufe; //Muss wieder auf der Variable gespeichert werden