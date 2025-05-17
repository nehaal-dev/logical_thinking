<?php  
//Problem 2: Average of array elements

$arr=[2,22,34,1,67,98];

$sum=0;

for($i=0; $i < count($arr);$i++){
    $sum+=$arr[$i];
     
}

echo $avg=$sum / count($arr);


?>


