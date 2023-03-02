<?php
    // echo "OOP - Object Oriented Programming<br>";

    class User{
        public $name;
        public $age;
        public $email;
        public $password;

        //constructor
        public function __construct($name, $age, $email, $password){
           $this->name = $name;
           $this->age = $age;
           $this->email = $email;
           $this->password = $password;
        }

        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
    }

    $user1 = new User('Phuc', 21, 'minhphuc.nguyen@gmail.com', '123');
    $user2 = new User('Tony', 21, 'tony.nguyen@gmail.com', '1234');
    // $user1->name = 'Phuc';
    // $user1->age = 21;
    // $user1->email = 'minhphuc.nguyen1609@gmail.com';
    // $user1->password = '123456';
    // $user1->set_name('Phuc123');
    // $user2->set_name('Bob');
    // print_r($user1);
    // print_r($user2);
    // echo $user1->get_name() . "<br>";
    // echo $user2->get_name();

    // echo $user2->email;
    // echo $user2->name;

    class Employee extends User{
        public $title;
        public function __construct($name, $age , $email ,$password, $title){
            parent::__construct($name, $age , $email ,$password);
            $this->title = $title;
        }

        public function get_title(){
            return $this->title;
        }
    }

    $employee1 = new Employee('Taylor', 30, 'taylor@gmail.com', '123456', 'sales manager');
    echo $employee1->title;
?>