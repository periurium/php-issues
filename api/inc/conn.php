<?php 
    include_once('config.php');

    ini_set('display_errors', 1);
    error_reporting(E_ALL);


    class MySQL extends Dbset{

        var $myconn;

        function connect() {
            $dbConfig = new Dbset();

            $con = mysqli_connect("".$dbConfig->serverName."", "".$dbConfig->userName."", "".$dbConfig->passCode."", "".$dbConfig->dbName."");
            if (!$con) {
                die('Could not connect to database!');
            } else {
                $this->myconn = $con;
                echo 'Connection established!';}
            return $this->myconn;
        }
        function close() {
            mysqli_close($myconn);
            echo 'Connection closed!';
        }

    }
?>
