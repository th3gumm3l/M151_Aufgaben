<?php
$zahl1 = intval($_GET['zahl1']);
$zahl2 = intval($_GET['zahl2']);
$mode = $_GET['modus'];
$resultat = 0;

if ($_GET['modus'] == 'plus'){
    $resultat = $zahl1 + $zahl2;
}
//Test
//?zahl1=1&zahl2=2&modus=plus

if ($_GET['modus'] == 'minus'){
    $resultat = $zahl1 - $zahl2;
}
//Test
//?zahl1=1&zahl2=2&modus=minus

if ($_GET['modus'] == 'mal'){
    $resultat = $zahl1 * $zahl2;
}
//Test
//?zahl1=1&zahl2=2&modus=mal

if ($_GET['modus'] == 'div'){
    $resultat = $zahl1 / $zahl2;
}
//Test
//?zahl1=1&zahl2=2&modus=div

echo "Das Resultat gibt = $resultat";