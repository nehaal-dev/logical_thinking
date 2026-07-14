<?php

ini_set("display_errors","ON");
error_reporting(E_ALL);

 //Count frequency of each element in an array (use associative arrays, no built-in frequency (functions)

 $arr=[2,22,34,1,67,98,98,2,34,67,21,21,12,21,12,2,2,2,1,1,1,1];

$num=0;
 
foreach($arr as $assoc){

    if(isset($assoc === $assoc)){

          $num++;
    }

}

// echo '<pre>';
// print_r($assoc);

echo $num.'<br>';
