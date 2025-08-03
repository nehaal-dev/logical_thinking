<?php  


function reverse_string($str){

    $length=strlen($str)-1;
    $rev='';


    for($i=$length;$i >=0;$i--){

        $rev.=$str[$i];

    }
    return $rev;
}

$str="hello";

echo reverse_string($str);







function reverseString($str) {
    $rev = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
      $rev .= $str[$i];
    }
    return $rev;
  }
  
  echo reverseString("Nehaal"); // laaheN