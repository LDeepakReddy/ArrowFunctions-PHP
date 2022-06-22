<?php

$y=5;

$array = [10,20,30,80];
// function multiply (){
   
//     for($i = 0; $i < count($array);$i++){
//         $array[$i] = $array[$i]*2;
//         echo $array[$i] . "\n";

//     }
// }
// multiply();


//multiply with 2
$multiply = array_map(fn($num)=> $num * 2,$array);
print_r($multiply);

//comparing
$result = fn($x,$y) => $x == $y;//$y from global scope
echo " result : \n ";
echo $result(10,10);

?>