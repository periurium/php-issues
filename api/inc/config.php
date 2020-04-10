<?php 

    // MySQL Connection 

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    class Dbset {

        protected $serverName;
        protected $userName;
        protected $passCode;
        protected $dbName;

        function _construct() {
            $this->serverName = 'localhost';
            $this->userName = 'mimbl';
            $this->passCode = 'jq}xc@;^S`FDnCJf),Fym6!f<}.@NwP/';
            $this->dbName = 'mimbl';
        }
    }

    // End of MySQL Connection 

    
?>
