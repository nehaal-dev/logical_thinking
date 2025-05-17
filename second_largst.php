<?php 
//Problem: Find the second largest element in an array without sorting the array.

$arr=[2,111,34,43,56,65];

$max=$arr[0];

for($i=1; $i < count($arr); $i++){

    if($arr[$i] > $max){
        $max=$arr[$i];
    }
 
    
}
$firstMax=[$max];

$secondMax1=array_diff($arr,$firstMax);

$secondMax=array_values($secondMax1);

$Max=$secondMax[0];
for($i=1; $i < count($secondMax); $i++){
    if($secondMax[$i] > $Max){
        $Max=$secondMax[$i];
    }
}
echo $Max;
   


?>