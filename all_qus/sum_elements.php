<?php  
//find sum of all elements of array.

$arr=[2,111,34,43,56,65];


$sum=0;

for($i=0; $i < count($arr); $i++){
    $sum+=$arr[$i];
}
echo $sum;
?>