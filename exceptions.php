<?php 
    echo "Exceptions in PHP<br>";
    function devide($a, $b){
        if(!$b){
            throw new Exception("Cannot divide by zero<br>");
        }
        return $a / $b;
    }
    // echo devide(5,0);

    try{
        echo devide(10,2) . "<br>";
        echo devide(5, 0);
        echo "no errors";
    }catch(Exception $e){
        echo "Caught exception: " . $e->getMessage() . "\n";
    }finally {
        echo "Finally come here<br>";
    }
    echo "Program runs here....";
?>