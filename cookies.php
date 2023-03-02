<?php
    echo "Cookies in PHP<br>";

    //save data to cookie
    setcookie('name', 'Phuc', time() + 24 * 3600);
    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }

    //delete data from cookie
    setcookie('name', '', time() - 24 * 3600);
?>