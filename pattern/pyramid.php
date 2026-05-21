//Implement Linear Search manually

$num=[1,22,34,44,21,11,0,13,19];
$target=19;

for($i=0 ; $i < count($num); $i++){

    if( $num[$i] == $target){
        echo 'Linear Search  found    '.$num[$i] . '<br>' ;
        exit;
    } 

}





$num = [1, 22, 34, 44, 21, 11, 13, 19];

$first_max=$num[0];
$second_max=$num[1] ;


for($i=0; $i < count($num) ; $i++){

    if($num[$i] > $first_max){ 
        $second_max=$first_max;
        $first_max=$num[$i];
        
    }
}

echo  'First max  '.  $first_max  . '<br> Second Max  ' . $second_max;