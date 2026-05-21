<?php
// DAY 7   Count frequency of each element in an array (use associative arrays, no built-in frequency
//functions  👉 HashMap / Frequency Counter Pattern
// STEP 1   Empty associative array banao
// STEP 2    Original array traverse karo
// STEP 3    Current element ko associative array ki key banao
// STEP 4   Agar key already exist karti hai:  frequency increase karo
// STEP 5  Agar first time mila: frequency = 1
// STEP 6 foreach use karke key-value print karo



$num=[3,24,11,45,24,14,11,22,31,37,39,31,45,24,11] ;
$assoc=[] ;

for($i=0 ; $i < count($num) ; $i++){
   if(isset( $assoc[$num[$i]] )){
       $assoc[$num[$i]]++;
   }else{
       $assoc[$num[$i]]=1;
   }
}
 foreach( $assoc as $key => $value){

   echo $key . " => " . $value . "<br>";
   

 }
 ?>