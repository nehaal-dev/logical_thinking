<?php 

//Pattern 3 — Reversal & Two Pointer

//Reverse array manually

error_reporting(E_ALL);
ini_set('display_errors','ON');
 

$num=[3,24,11,45,24,14,11,22,31,37,39,31,45,24,11,11,10,31,39] ;

$length=count($num);

 $uniq=[];
 
 for($i=$length - 1; $i >=0 ; $i-- ){

     if(!isset($uniq[$num[$i]])){

    $uniq[$num[$i]]=true  ;
    

     } 
 }
 
 echo '<pre>' ;
 print_r($uniq);


 



?>