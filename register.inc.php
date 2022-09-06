<?php

    if (isset($_POST['signup-submit'])) {

        //Grabbing data from user
        $fullname = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['pwd'];
        $confPassword = $_POST['conPwd'];
        $role = $_POST['role'];

        //Accessing to database and validation functions
        require_once 'dbcontroller.php';
        require_once 'validation.php';

        //Validating username
        if(invalidUsername($username) !== false) {
            header("Location: register.php?error=invalidUsername");
            exit();
        }

        //Validating password
        if(passwordNotMatch($password, $confPassword) !== false) {
            header("Location: register.php?error=passwordsNotMatch");
            exit();
        }

        addNewUsers($handler, $fullname, $username, $password);
    }
    else {
        header("Location: register.php");
    }
?>