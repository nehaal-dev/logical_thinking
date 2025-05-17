<?php 
// 🧠 Day 7 Challenge

// 🔸 Problem Title: Count Frequency of Each Element

// Difficulty: Easy
// Tags: Array, Hashing, Loop, Associative Array

// 🔹 Problem Statement:

// Given an array of integers, write a program to count the frequency of each element and return the result as an associative array.

// function frequency_array($arr){
    
// }

$arr=[2,22,34,19,67,98,34,44,22,2,1,12,44,12,19,1];

$assoc_arr[]='';

 for($i=0; $i < count($arr) ; $i++){

    if(in_array($arr[$i], $arr)){

        $assoc_arr[] += $arr[$i];

    }
    
 }


 echo "<pre>" ;
 print_r($assoc_arr);











?>