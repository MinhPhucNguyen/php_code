<?php
    echo "We talk about Array<br>";
    $some_numbers = [1,2,3,4,5];
    $fruit = ['pineapple', 'melon', 'apple'];
    $fruit2 = array('pineapple', 'apple', 'pear');
    // print_r($fruit);
    // print_r($fruit2);
    // echo $fruit[0];
    $color = [
        3 => 'red',//key  - value
        5 => 'green',
        7 => 'blue',
    ];
    echo $color[7];

    $hex_colors = [
      'red' => "#FF0000",
      'green' => '#00FF00',
      'blue' => '#0000FF',  
    ];

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
    // print_r($persons);
    // echo $persons[0]['full_name'];
    var_dump(json_encode($persons));
?>