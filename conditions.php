<?php
     echo "We talk about Conditions<br>";
    //  $age = 30;
    //  if($age > 18){
    //     echo 'greater than 18 years old';
    //  }
    //  else{
    //     echo "so young";
    //  }

    // $hours = date("H");
    $hours = 13;
    // echo $hours;
    // if($hours < 12){
    //     echo 'Good Morning';
    // }
    // else if($hours >= 12 && $hours <= 17){
    //     echo 'Good Afternoon';
    // }
    // else{
    //     echo 'Good Evening';
    // }

    $comments = ['Good', 'I like it', 'How are you ?'];

    // if(!empty($comments)){
    //     echo "There are some comments";
    // }
    // else{
    //     echo 'No comments';
    // }

    // echo !empty($comments) ? 'There are some comments' : "No comments";

    // $fist_commnent = !empty($comments) ? $comments[0] : "No comments";
    $fist_commnent = $comments[0] ?? 'No comments';
    echo $fist_commnent;

    $favourite_color = 'green';
    switch($favourite_color){
        case 'red':
            echo 'You choose RED';
            break;
        case 'green':
            echo 'You choose GREEN';
            break;
        case 'blue':
            echo 'You choose BlUE';
            break;
        default: 
            echo 'Not RED, GREEN, BLUE';
    }
?>