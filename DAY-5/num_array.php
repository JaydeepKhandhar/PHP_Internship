<?php

$a = 10;
echo $a;
echo "<br>";
$b = array(10, 20, 3, 3.2, "jay");
echo $b[2];
echo "<br>";
for ($i = 0; $i < count($b); $i++) {
    echo "<br>";
    echo $b[$i];
}
echo "<br>";
echo "<pre>";
print_r($b);
echo "<pre>";
echo "<br>";
echo "<pre>";
var_dump($b);
echo "<pre>";

$sum = array_sum($b);
echo $sum;
