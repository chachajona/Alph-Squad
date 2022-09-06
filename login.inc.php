<?php

    if(isset($_POST["sign-in"])) {

        //Grabbing the data from user
        $username = $_POST["username"];
        $password = $_POST["pwd"];
        $role = $_POST["role"];
        
        //Accessing to database and validation functions
        require_once 'dbcontroller.php';
        require_once 'validation.php';

        signinUsers($handler, $username, $password, $role);
    }
    else {
        header("Location: login.php");
    }
?>
