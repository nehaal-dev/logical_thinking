<?php  

function third_largest($array){

    $firstMax=PHP_INT_MIN;
    $secondMax=PHP_INT_MIN;
    $thirdMax=PHP_INT_MIN;


    if(count($array) < 3){
        echo "Third largest does not exist" ;
        exit;
    }

for($i=0; $i < count($array) ; $i++){
    if($array[$i]  > $firstMax){
        $secondMax=$firstMax;
        $thirdMax=$secondMax;
        $firstMax=$array[$i];
    }elseif(  $array[$i] > $secondMax && $array[$i] > $thirdMax && $array[$i] != $firstMax && $array[$i] != $secondMax && $array[$i] != $thirdMax){


        $secondMax=$array[$i];
         
    }
}

if($thirdMax == PHP_INT_MIN) {
    return "NO THIRD LARGEST EXIST";
   }else{
    return "THIRD LARGEST EXIST .$thirdMax" ;
   }

}
$val=[101,202,193,55,40,116];

echo third_largest($val);







?>