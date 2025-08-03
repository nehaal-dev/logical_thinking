<?php 
// 🧠 Day 7 Challenge

// 🔸 Problem Title: Count Frequency of Each Element

// Difficulty: Easy
// Tags: Array, Hashing, Loop, Associative Array

// 🔹 Problem Statement:

// Given an array of integers, write a program to count the frequency of each element and return the result as an associative array.

// function frequency_array($arr){
    
// }
ini_set("display_errors","ON");
error_reporting(E_ALL);

 
$arr = [2,22,34,19,67,98,34,44,22,2,1,12,44,12,19,1];
$assoc_arr = [];

for($i = 0; $i < count($arr); $i++) {
    if (isset($assoc_arr[$arr[$i]])) {
        $assoc_arr[$arr[$i]]++;
    } else {
        $assoc_arr[$arr[$i]] = 1;
    }
}

echo "<pre>";
print_r($assoc_arr);



//second method
function frequency($array){

    $assoc_arr=[]; 

      for($i=0; $i <count($array); $i++){

        if(isset($assoc_arr[$array[$i]])  ){
            $assoc_arr[$array[$i]]++;           
        }else{
            $assoc_arr[$array[$i]]=1;
             
        }

      }
      return $assoc_arr;

 }

 $val=[2,11,11,33,2,33,104,161,104,104,104,93,161];

 $assoc_arr=frequency($val);

 echo '<pre>';
 print_r($assoc_arr) ;






?>