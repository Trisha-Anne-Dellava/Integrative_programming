<?php
    class User{
        public $name;
        public $username;
        public $email;

        function __construct($name, $username, $email){
            $this->name = $name;
            $this->uname = $username;
            $this->email = $email;
        }

        function AddFriend(){
            echo  $this->name, " Added a friend."; 
        }
        function postStatus(){
            echo  $this->name, " Posted a status."; 
        }
    }

    $meow = new User("Trisha Anne Dellava", "Lucy Fur", "trishaling.dellava@gmil.com");
    $meow->AddFriend();
    echo "<br>";
    $meow->postStatus();
?>