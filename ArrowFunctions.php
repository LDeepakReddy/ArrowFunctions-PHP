<?php
// arrow function
$add = fn($a,$b) => $a + $b;

echo $add(7,9);
//  square of elements
$nums = [2,4,7,12,15];
$squareNums = array_map(fn($num) => $num * $num,$nums );
print_r ($squareNums);

// filter Multiplies of 5 from an array
$data = [2,5,10,15,7,14,17,25,30,34,32,45,100,1,24];

$multiplyOf5 = array_filter($data,fn($num)=> ($num % 5 == 0));
print_r($multiplyOf5);





?>