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
<?php  
//Day 3 - Linear Search (Problem Solving + Logic Building)
//Check if a given element exists in an array or not (Linear Search).

// $search = 5;
// $arr = [3, 8, 5, 1, 9];

// for($i=0;$i < count($arr); $i++){
//     if ($arr[$i] == $search){
//         echo  "Match found". " ". $search;
//         exit;
//     } 
// }
 
//     echo "match not found" ;
 

function linear_search($array){

    $n=count($array) ;
    $element=19;

    for($i=0; $i<$n;$i++){

        if($element == $array[$i] ){
            echo "match found " .$array[$i];
            exit;
        }else{
            echo "not found" ;
            exit;
        }


    }


}

$array=[10,11,23,32,9,34,55,66] ;

linear_search($array) ;











?>


 
 

 


?>