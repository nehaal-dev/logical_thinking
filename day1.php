<?php 
error_reporting(E_ALL);
ini_set('display_errors','ON');
 
//Find  max and min of array element .

$num=[3,24,11,45,24,14,11,22,31,37,39,31,45,24,11,1,10] ;

$max=$num[0];
$min=$num[0];

  for($i=  0 ; $i < count($num) ; $i++){

    if($num[$i] > $max ){ 

      $max=$num[$i] ;
    } 
    
if($num[$i] < $min){
  $min=$num[$i];
}

  }

  echo 'Max No : '.  $max . '<br> Min No : ' .$min ;






?>