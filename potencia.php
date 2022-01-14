<?php

function pot($x, $y) {

    if ($y < 0) {
        $x = 1 / $x;
        $y = $y * -1;
    }

    $total = 1;

    for ($i = 0; $i < $y; $i++) {
        $total = $total * $x;
    }

    return $total;

}

$num1 =  $_POST['num1'];
$num2 = $_POST['num2'];

$pot = pot($num1, $num2);

echo $pot;


?>