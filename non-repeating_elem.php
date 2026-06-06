<?php 
error_reporting(E_ALL);
ini_set('display_errors','ON');  

//Find first non-repeating element .

$num=[3,24,11,45,24,14,11,22,31,3,39,31,45,24,11,11,10,13 ,31,39] ;

$non_repeat=[];

$index=[];

for($i=0; $i < count($num) ; $i++){

  if(isset($non_repeat[$num[$i]])){

    $non_repeat[$num[$i]]++  ;
  }else{
    $non_repeat[$num[$i]] = 1;
  }
}


foreach($non_repeat as $key => $value){

  if($value == 1){

   $index[]=$key ;
  }

}

print_r($index[0])   ; 
?>