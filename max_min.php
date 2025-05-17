<?php 
 
$arr=[2,22,34,1,67,98];

$max=$arr[0];
$min=$arr[0];
for($i=1; $i < count($arr); $i++){
    if($arr[$i] > $max){
        $max=$arr[$i];
    }

    if($arr[$i] < $min){
        $min=$arr[$i];
    }
}
echo $max . "</br>" .$min;

?>