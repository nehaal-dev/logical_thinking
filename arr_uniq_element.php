<?php 
error_reporting(E_ALL);
ini_set('display_errors','ON');

//Pattern 2 — HashMap / Associative Array / Frequency
//Print unique elements from array   --->  jo sirf ek bar aya ho .

$num=[3,24,11,45,24,14,11,22,31,37,39,31,45,24,11,11,10 ,31,39] ;

$dub=[];
 
for($i=0; $i < count($num) ; $i++ ){
  

   if( isset( $dub[$num[$i] ] )){
     $dub[$num[$i]]++  ;

   }else{
    $dub[$num[$i]]=1;

   }
}

// foreach( $dub as $key => $value){
//  if($value == 1){
//    echo $key . '<br>' ;
//  }
// }
 

for($i = 0; $i < count($num); $i++){

   if($dub[$num[$i]] == 1){

       echo $num[$i] . "<br>";

   }

}
 
 
?>