<?php 
error_reporting(E_ALL);
ini_set('display_errors','ON');

//Remove Dublicate element from array.

$num=[3,24,11,45,24,14,11,22,31,37,39,31,45,24,11,11,10 ,31,39] ;

 
 $new_num=[] ;

 for($i=0 ; $i < count($num) ; $i++ ){


    if(!isset($new_num [ $num[$i] ] )){
        // $new_num[$num[$i]]=$num[$i];  //ye bhi sai h 
        $new_num[$num[$i]]=true;  //ye bhi sai h .
    } 
 }

 echo '<pre>' ;
 print_r($new_num);




?>