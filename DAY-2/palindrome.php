<?php
$a = 10101;
$n1 = $a;
$n2 = 0;
// $r ;
while($a != 0){
    // $r = $a%10;
    $n2 = ($n2 * 10 + $a%10);
    $a =(int)($a/10); //typecasting
}
if($n1 == $n2){
    echo "$n1 is palindrome";
}else{
    echo "$n1 is not palindrome";
}
?>