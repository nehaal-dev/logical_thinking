<?php  
// Day 5 - Find second largest element in array (with duplicates, no built-in sort)

$value = [2, 1, 1, 33, 44, 55, 33, 103, 109];

// Step 1: Remove duplicate values
$originalArray =array_values(array_unique($value)) ;

// Step 2: Find the maximum (first largest) element
$firstMax = $originalArray[0];
for ($i = 1; $i < count($originalArray); $i++) {
    if ($originalArray[$i] > $firstMax) {
        $firstMax = $originalArray[$i];
    }
}

// Step 3: Remove the first max from array
$filteredArray = array_diff($originalArray, [$firstMax]);
$filteredArray = array_values($filteredArray); // reindex

// Safety check: Ensure at least one more element is present
if (count($filteredArray) == 0) {
    echo "Second largest element not found!";
    exit;
}

// Step 4: Find second largest from the remaining array
$secondMax = $filteredArray[0];
for ($i = 1; $i < count($filteredArray); $i++) {
    if ($filteredArray[$i] > $secondMax) {
        $secondMax = $filteredArray[$i];
    }
}

echo "Second largest element is: " . $secondMax;
?>