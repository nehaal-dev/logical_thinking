<?php 

$text="mom" ;

$reverse_text=strrev($text);

 if($text == $reverse_text){
    echo "given string is pallindrome". " " .$reverse_text;
 }else{
    echo "no pallindrome";
 }

 echo "<br>";
$num=121;

$str=(string)$num;

$rev_num=strrev($str);

$rev_num=(int)$rev_num;


if($num == $rev_num){
    echo "given number is pallindrome". " ".  $num;
 }else{
    echo "no pallindrome";
 }


?>