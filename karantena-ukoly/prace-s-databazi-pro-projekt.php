<?php
// declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RESTAURACE</title>
</head>
<body>

<?php
// pripojeni k databazi
$connection = pripojitSeKDatabazi();


/*****************************
 * Funkce pro praci s databazi
 ******************************/
function vykonejSQL($connection, $sql) {
    if (!mysqli_query($connection, $sql)) {
        echo "Vyskytla se chyba: " . mysqli_error($connection);
    }
}

/*****************************
 * Funkce pro praci s databazi
 ******************************/
function vykonejSQLSelect($connection, $sql) {
    if (!mysqli_query($connection, $sql)) {
        echo "Vyskytla se chyba: " . mysqli_error($connection);
    } else {
        return mysqli_query($connection, $sql);
    }
}

/*****************************
 * Funkce pro praci s databazi
 ******************************/
function pripojitSeKDatabazi() {
    $dbname = 'restaurace';
    $username = 'root';
    $password =  'root';
    $host = 'localhost';

    try {
        return mysqli_connect($host, $username, $password, $dbname);
    } catch (Exception $e) {
        die("Neni mozne se pripojit k DB:" . $e->getMessage());
    }
}

// ziskani ID z url parametru
if (count($_GET) === 0 || !$_GET['restaurace']) {
    echo 'ID nezadano';
    die();
}

mysqli_set_charset($connection,"utf8"); // kodovani

// Ulozeni ID z url adresy
// Napriklad pro url adresu:
//     localhost/vase-slozka/nazev-php-souboru.php?restaurace=6
// bude do promenne $id ulozena hodnota 6.
$id = $_GET['restaurace'];
// ziskani informaci o datbazi z DB
$sqlSelect = "SELECT * FROM restaurace WHERE id = ".$id;
$result = vykonejSQLSelect($connection, $sqlSelect);


// Vytisknuti vsech informaci o restauraci.
// Poznamka: Tabulka restaurace ma sloupce: nazev, adresa, popi, telefon a web
echo '<table>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div>'.$row['nazev'].'</div>';
    echo '<div>'.$row['adresa'].'</div>';
    echo '<div>'.$row['popis'].'</div>';
    echo '<div>'.$row['telefon'].'</div>';
    echo '<div>'.$row['web'].'</div>';
}
echo '</table>';


// Ziskani jidel
// Bude vysvetleno v online hodine
$sqlSelect = "SELECT jidlo.nazev, jidlo.cena, menu.datum FROM jidlo JOIN menu ON menu.id = jidlo.menu_id JOIN restaurace ON restaurace.id = menu.restaurace_id WHERE restaurace.id = ".$id;
$result = vykonejSQLSelect($connection, $sqlSelect);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div>'.$row['nazev'].'</div>';
}


?>
</div>
</body>
</html>