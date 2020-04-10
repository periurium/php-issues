<?php 

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include_once("inc/config.php");
    include_once("inc/user.php");
    include_once("inc/conn.php");

    $user = new User();

    header("Content-Type:application/json; charset=UTF-8;");

    $json_str = file_get_contents('php://input');
    return $json_str;
    $obj = json_decode($json_str);

    if($obj->type === "reg") {
        $email = $obj->email;
        $password = $obj->password;
        $ip = $obj->ip;

        $sub_user = $user->register($email, $password, $ip);
        return $sub_user;
    }  else {
        return "Error";
    }

?>
