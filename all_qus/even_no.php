<?php

//Print all even numbers from 1 to N (without using built-in filter functions).  yha range puch rha h  matlab 1 se 100 ke bich ka even number.


$n=100;

 for($i=1;$i <= $n ; $i++){
    if($i % 2 == 0){
        echo $i .'&nbsp' ;
    } 
    // echo "<br>" ;
 }


echo '<br>' ;
//Question: Print first N even numbers, yha number matlab 100 even number btao 

for($i=1; $i <= $n ;$i++){
    echo $i*2 .'&nbsp' ;
}









?>