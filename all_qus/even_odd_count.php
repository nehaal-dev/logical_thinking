<?php 
$arr = [12, 7, 5, 20, 33, 40, 19, 8];

$evenCount=0;
$oddCount=0;

for( $i=0 ; $i < count($arr); $i++){
    if( $arr[$i]%2  == 0  ){
         $evenCount++;
    }else{
        $oddCount++;
    }
}

echo $evenCount. "<br>" . $oddCount ;
?>