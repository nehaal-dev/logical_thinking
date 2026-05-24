<?php 
//Count frequency of characters in string

$str="hello" ;
$word=[] ;

 for($i=0 ; $i < strlen($str) ; $i++){
   

    if(isset( $word[$str[$i] ])){
        $word[$str[$i]]++ ;
    }else{
        $word[$str[$i]]=1;
    }
 }

 echo'<pre>' ;
 print_r($word);
 

?>