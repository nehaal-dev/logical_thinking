<?php  
//Day 3 - Linear Search (Problem Solving + Logic Building)
//Check if a given element exists in an array or not (Linear Search).

$search = 5;
$arr = [3, 8, 5, 1, 9];

for($i=0;$i < count($arr); $i++){
    if ($arr[$i] == $search){
        echo  "Match found". " ". $search;
        exit;
    } 
}
 
    echo "match not found" ;
 
 

 


?>