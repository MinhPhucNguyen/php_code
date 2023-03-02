<?php
    $y = 22;
    echo "We talk about Function<br>";
    function sayHello($name){
        global $y;
        echo "y = $y";
        echo "Hello $name";
    }
    // sayHello("Phuc"); //call function

    function sum($a = 0, $b = 0){
        return $a + $b;
    }

    // echo sum(1, 2);

    $multiply = function($a, $b){
        return $a * $b;
    };

    // echo $multiply(3,4);

    $subtract = fn($a , $b) => $a - $b;
    // echo $subtract(6,2);

    $names = ['john', 'anna', 'hoang', 'tony'];
    echo "number of items: ".count($names);
    //search inside array
    var_dump(in_array("hoang", $names));
    //insert an item
    array_push($names, 'phuc', 'tom');
    array_unshift($names, "satoshi");
    // array_pop($names);
    // array_shift($names);
    unset($names[3]);
    $chunked_array = array_chunk($names, 3);
    $array_one = [1,2,5];
    $array_two = [2,4,6];
    $merged_array = array_merge($array_one, $array_two);
    
    $array_tree = [...$merged_array]; 
    $merged_array[0] = 111;
    // print_r($merged_array);
    // print_r($array_tree);

    $array_four = [...$array_one, ...$array_two];
    print_r($array_four);


    $a = ['name', 'email', 'age'];
    $b = ['Phuc', 'minhphuc@gmail.com', '21'];
    $c = array_combine($a, $b);
    print_r(array_keys($c));
    print_r(array_values($c));
    $numbers = range(0, 9);
    print_r($numbers);

    $square_number = array_map(fn($each_number) =>
         $each_number * $each_number
    , $numbers);
    print_r($square_number);

    //filter an array
    $filtered_numbers = array_filter($numbers, fn($each_number) => $each_number % 2 == 0);
    print_r($filtered_numbers);

    ?>