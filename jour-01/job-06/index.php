<?php


function my_array_sort(array $arrayToSort, string $order) : array {

    $myArray = [];

    foreach($arrayToSort as $value){
        // var_dump($value);
        // echo "<hr>";
        if($order === "ASC"){
            echo "asc";
            
            // var_dump($value);
            // for($i=0);
            $myArray[] = $value;
            var_dump($myArray);

            
            
        }elseif($order === "DESC"){
            echo "<br>";
            // var_dump($value);
            echo "desc";
            $myArray[] = $value;
            var_dump($myArray);



        };
    }   
    return $myArray;
    

    
}

my_array_sort([1,7,5,8,3],'ASC');


