<?php
$zutaten = array('Salami', 'Zwiebeln', 'Speck');
$eingabe = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $eingabe = $_POST['eingabe'];
    $eingabe.array_push($zutaten);
}

?>

<h1>Pizza Konfigurator</h1>
<p>Deine Pizza besteht aus folgenden toppings</p>

<ul>
    <?php
    foreach ($zutaten as $zutat) {?>
       <li> <?php echo $zutat; ?> </li> <?php
    }
    ?>
</ul>

<form method="POST" action="?">
    <input type="text" name="eingabe" placeholder="Zutat"/>
    <input type="submit" value="Hinzufügen"/>
</form>

