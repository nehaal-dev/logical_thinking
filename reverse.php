<?php  
//reverse array element without using built in.
$arr=[2,111,34,43,56,65];

 $length=count(($arr));

for($i=$length-1; $i>=0;$i--){
    echo $arr[$i]." ";
}

<<<<<<< HEAD

?>

<?php
//  SECOND METHOD

//Reverse an array without using built-in reverse function.


function reverse_arr($array){
$revrsed_array=[] ;

    for($i=count($array)-1;$i >= 0;  $i--){

        $revrsed_array[]=$array[$i];

    }
    return $revrsed_array;


}

$value=[10,11,23,32,9,34,55,66] ;

 $val= reverse_arr($value) ;

 echo '<pre>' ;
 print_r($val);
  
=======
 



?>
>>>>>>> 0e9ec72ee029033681c1a3845cd7a44cac4b680b
