<?php
    echo "We talk about stringFunction<br>";

    $full_name = 'Nguyen Minh Phuc';
    // echo "length: ".strlen($full_name)."<br>";
    // echo strrev($full_name);
    // echo strtolower($full_name);
    // echo strtoupper($full_name);
    //find and replace
    // echo str_replace(' ', '-', $full_name);
    if(str_starts_with(strtolower($full_name), 'nguyen')){
        echo "His name starts with nguyen<br>";
    }
    if(str_ends_with(strtolower($full_name), 'phuc')){
        echo "His name ends with phuc";
    }

    // echo "<h1>html string</h1>";
    echo htmlspecialchars("<h1>html string</h1>");

    // echo "<script>alert('This is javascript code')</script>";
    echo htmlspecialchars("<script>alert('This is javascript code')</script>");

    printf('<br> %s likes %s', 'Phuc', "Mercedes G63");
    printf('<br> pi = %f', 3.14);
?>