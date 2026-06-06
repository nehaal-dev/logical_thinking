<?php 
error_reporting(E_ALL);
ini_set('display_errors','ON');
//Find first repeating element   Pattern-2 Hashmap/Associative array.



$num=[3,24,11,45,24,14,11,22,31,37,39,31,45,24,11,11,10 ,31,39] ;

$repeat_element=[] ;


for($i=0; $i < count($num) ; $i++){

    if(isset($repeat_element[$num[$i] ])){

        $repeat_element[$num[$i]]=true ;
        break;
    }else{
        $repeat_element[$num[$i]]= $num[$i];
       
    }
}
 echo   $num[$i];