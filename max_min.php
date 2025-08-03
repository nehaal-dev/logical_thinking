<?php 
 
<<<<<<< HEAD
$arr=[2,22,34,1,67,98,-99,-99];
=======
$arr=[2,22,34,1,67,98];
>>>>>>> 0e9ec72ee029033681c1a3845cd7a44cac4b680b

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