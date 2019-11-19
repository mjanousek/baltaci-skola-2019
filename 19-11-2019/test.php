<?php
// declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test 19.11.</title>
</head>
<body>

<?php

// TODO: napsat funkci

echo textLengthToString('ahoj'); // délka řetězce: 4
echo '<br>';
echo textLengthToString('ahoj', 'délka ahoj je'); // délka ahoj je: 4


// TODO: napsat funkci

echo '<br>';
echo sumArray([['hodnota' => 1] , ['hodnota' => 2]]); // 3
echo '<br>';
echo sumArray([['hodnota' => 1] , ['hodnota' => 2], ['hodnota' => 3]]); // 6


?>

</body>
</html>
