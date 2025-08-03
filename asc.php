<?php  

$arr=[2,111,34,43,56,65];

$n=count($arr);

for($i=0;$i < $n-1  ; $i++ ){
    for($j=0;$j < $n-1-$i; $j++){
      
        if($arr[$j] > $arr[$j+1]){
       
            $temp=$arr[$j];
            $arr[$j]=$arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}


echo implode(",", $arr);




?>