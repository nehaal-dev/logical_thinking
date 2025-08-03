<?php  

function factorial($n){
    if($n == 0 && $n == 1){
        return 1;
    }else{
        return($n * ($n-1)) ;
    }
}

$n=10;

echo factorial($n);


?>