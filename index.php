<?php
    class User{
        public $type; # Variable publica
    }

   
    class Admin{
        public function greet(){ #Funcion publica
            return "Hola Administrador";
        }
    }

    $user = new User;
    $user -> type = new Admin;
    
    echo $user -> type -> greet();



?>