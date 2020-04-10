<?php 

    include "conn.php";

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    class User {
           
        
        public $password;
        public $email;
        public $ip;


        // User Registration
        function register($email, $password, $ip) {
            $dbC = new MySQL();

            $dbC->connect();

            $query = "INSERT INTO users (`email`, `pass`, `ip`) VALUES ('".$email.", '".$password."', '".$ip."')";
            
            $result = $dbC->myconn->query($query);

            if ($result === TRUE) {
                return "Success";
            } else {
                return "Error";
            }
        }

    }


?>
