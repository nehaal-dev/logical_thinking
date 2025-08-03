<?php
// Day 5 - Find second largest element in array (with duplicates, no built-in sort)

//$value = [2, 1, 1, 33, 44, 55, 33, 103, 109];

// Step 1: Remove duplicate values
// $originalArray =array_values(array_unique($value)) ;

// // Step 2: Find the maximum (first largest) element
// $firstMax = $originalArray[0];
// for ($i = 1; $i < count($originalArray); $i++) {
//     if ($originalArray[$i] > $firstMax) {
//         $firstMax = $originalArray[$i];
//     }
// }

// // Step 3: Remove the first max from array
// $filteredArray = array_diff($originalArray, [$firstMax]);
// $filteredArray = array_values($filteredArray); // reindex

// // Safety check: Ensure at least one more element is present
// if (count($filteredArray) == 0) {
//     echo "Second largest element not found!";
//     exit;
// }

// // Step 4: Find second largest from the remaining array
// $secondMax = $filteredArray[0];
// for ($i = 1; $i < count($filteredArray); $i++) {
//     if ($filteredArray[$i] > $secondMax) {
//         $secondMax = $filteredArray[$i];
//     }
// }

// echo "Second largest element is: " . $secondMax;
// echo "</br>";
?>

<?php
// Day 5 - Find second largest element in array (with duplicates, no built-in sort) ---  SECOND METHOD
//DRY RUN 
//$value = [2, 1, 1 , 103 , 33, 44, 55, 33, 103, 109];  
//question kah rha h ki koi ek array h aur hamko us array ke second largest element find karni hai, but us array me dublicate(same) elements h .
// so agar second largest dublicate h to ek hi second max hoga . 


//test all edge case
//  1. All Elements are Same   2. Only One Element in Array  3. Negative Numbers   4. Array Already Sorted  5.Second Largest is at Beginning
//🔹 Case 1: Normal Case
//🔹 Case 2: Duplicates of Largest
//🔹 Case 3: All Elements Same
//🔹 Case 4: Negative Numbers
//🔹 Case 5: Mixed Positive and Negative
//🔹 Case 6: Only Two Elements
//🔹 Case 7: Only One Element
//🔹 Case 8: Empty Array
//🔹 Case 9: Second Largest is PHP_INT_MIN

//NOTE
// this solution work on all edge cases for find second max/largest  even with dublicate, negative, positive , distinct value etc.

ini_set("display_error", "ON");
error_reporting(E_ALL);


function second_Largest_dub($array)
{
    
    $firstMax = PHP_INT_MIN;
    $secondMax = PHP_INT_MIN;

    if(count($array) < 2 ){
        echo "No Second Largest Exist" ;
        exit;
    }

    for ($i = 0; $i < count($array); $i++) {
      
        if($array[$i] > $firstMax ){
            $secondMax=$firstMax;
            $firstMax=$array[$i];

        }elseif($array[$i] > $secondMax && $array[$i] != $firstMax){           
            $secondMax= $array[$i]   ;

        }        
    }
    if($secondMax == PHP_INT_MIN){
        return "Second Max  does not exist" ;
    }else{
        return "second max is $secondMax" ;
    }

}
$value2 = [2, 1, 11, 103, 33, 44, 55, 33, 103, 109];
$value1=[2,2,2,2,2,2,2,2,2,2];
$value3=[];
echo second_Largest_dub($value3);






?>