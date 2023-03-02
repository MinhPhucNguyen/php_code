<!-- Variable -->
<?php
    echo "We talk about variables"."<br>";
    $name = "Hoang"."<br>";
    echo $name;
    $age = 20;
    echo $age;
    $bool = false;
    echo $bool;
    $sum = '2' + '3';
    echo $sum;
    define('SERVER_NAME', 'localhost');
    define('DATABASE_NAME', 'test_db');
    echo "Server: ".SERVER_NAME.', Database: '.DATABASE_NAME;
?>
