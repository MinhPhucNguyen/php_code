<?php
    echo "We talk about Iterations<br>";
    // for($i = 0; $i < 10; $i++){
    //     echo ": $i <br>";
    // }

    $i = 31;
    // while($i < 20){
    //     echo "i = $i<br>";
    //     $i += 1;
    // }

    // do{
    //     echo "i: $i <br>";
    //     $i += 1;
    // }while($i < 30);

    $fruits = ['apple', 'pineapple', 'orage', 'lemon'];

    // for($i = 0; $i < count($fruits); $i++){
    //     echo "$fruits[$i] <br>";
    // }

    foreach($fruits as $index => $fruit){
        echo "$index : $fruit <br>";
    }

    $person = [
        'full_name' => "Nguyen Minh Phuc",
        'email' => "minhphuc@gmail.com",
        'age' => 21,
    ];

    foreach($person as $key => $value){
        echo "$key : $value <br>";
    }

    $persons = [
        [
            'full_name' => 'Nguyen Minh Phuc',
            'age' => 21,
            'email' => 'minhphuc.nguyen1609@gmail.com',
        ],
        [
            'full_name' => 'Nguyen Bao Ngan',
            'age' => 21,
            'email' => 'ngboreo@gmail.com',
        ],
        [
            'full_name' => 'Nguyen Xuan Minh',
            'age' => 21,
            'email' => 'nxminh@gmail.com',
        ],
    ];

    for($i = 0; $i < count($persons); $i++){
        echo $persons[$i]['full_name'];
    }
?>