<?php 
//how to check for same element(dublicate) exist  of an  given array .

//DRY RUN/LOGIC

// function likhenge , phir loop chalayenge , array me jitne bhi element h utna tak.
//pahla element ko man lenge first element aur baki sab elements ko ausey compare karenge. $firstEleemnt se 

function same_array($arr){

$firstElement=$arr[0];
$length=count($arr) ;


for($i=1;$i < $length ; $i++){
    if($arr[$i] !== $firstElement){ 
        echo "all element not same".$arr[$i] ;      
        return;      
    }
    
    
}
 
echo $firstElement . "&nbsp all element same";

}
$array=[4,14,4,4,4,4,7];
same_array($array) ;




 