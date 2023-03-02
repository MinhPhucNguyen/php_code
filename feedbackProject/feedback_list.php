<?php
    require 'components/header.php';
    echo "<h1>List of feedbacks here</h1>";
    $sql = "SELECT name, email, body FROM feedback;";
    if($connection != null){
        try{
            $statement = $connection->prepare($sql);
            $statement->execute();
            $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
            $feedbacks = $statement->fetchAll();
            echo '<ul class="list-group">';
            foreach($feedbacks as $feedback) {
                $name = $feedback['name'] ?? '';
                $email = $feedback['email'] ?? '';
                $body = $feedback['body'] ?? '';
                echo "<li class='list-group-item'>";
                echo "<p>$name</p>";
                echo "<p>$email</p>";
                echo "<p>$body</p>";
                echo "</li>";
            }
            echo '</ul>';
        }
        catch(PDOException $e){
        };
        
    };
    
   include 'components/footer.php';
?>