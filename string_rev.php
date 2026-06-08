<?php  

// Reverse string without strrev() 
// Pattern 3 — Reversal & Two Pointer

error_reporting(E_ALL);
ini_set('display_errors','ON');


$str="hello" ;

// $length=strlen($str) ;
$length=0;

while(isset($str[$length])){
    $length++ ;
}

for($i=$length-1 ; $i >= 0  ; $i--){

    echo $str[$i] . '<br>' ;


}

 










?>