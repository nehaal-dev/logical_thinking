<?php 
//Problem: Find the second largest element in an array without sorting the array.

//$arr=[2,111,34,43,56,65,33,151];

// $max=$arr[0];

// for($i=1; $i < count($arr); $i++){

//     if($arr[$i] > $max){
//         $max=$arr[$i];
//     }
 
    
// }
// $firstMax=[$max];

// $secondMax1=array_diff($arr,$firstMax);

// $secondMax=array_values($secondMax1);

// $Max=$secondMax[0];
// for($i=1; $i < count($secondMax); $i++){
//     if($secondMax[$i] > $Max){
//         $Max=$secondMax[$i];
//     }
// }
// echo $Max;
   


//  SECOND METHOD  

//$arr=[56,2,-111,34,43,56,65,33,-151]; // all array element are distinct
$arr=[2,2,2,2,2,2,2];


$firstMax=$arr[0]; 
$secondMax=$arr[1];

if(count($arr) < 2){
    echo "No Second largest number exist" ;
}

for($i=1; $i < count($arr); $i++){
    if($arr[$i] > $firstMax ){
        $firstMax=$arr[$i];
    }

}

for( $i=0; $i <count($arr); $i++){
    if($arr[$i] < $firstMax &&  $arr[$i]  > $secondMax  ){
        $secondMax = $arr[$i];
    }
}
if($firstMax == $secondMax){
    echo "no second largest";
}else{
    return $secondMax;
}

echo "</pre>" ;
print_r($secondMax);

 
  

 


?>


