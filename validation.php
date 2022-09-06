<?php

    /*================================================================REGISTERATION================================================================*/
    //Validating username
    function invalidUsername($username) {
        //Username can only contain uppercase, lowercase characters and numbers
        if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    //Validating password
    function passwordNotMatch($password, $confPassword) {
        //Compare password and confirm password
        if ($password !== $confPassword) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    //Adding new users
    function addNewUsers($handler, $fullname, $username, $password) {
        //Checking username is existng or not
        //Prepare a SQL statement
        $sql = "SELECT userID FROM users WHERE userName = ?;";
        if($statement = mysqli_prepare($handler, $sql)) {
            //Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($statement, "s", $username);
            //Execute the prepared statement
            if(mysqli_stmt_execute($statement)) {
                //Store result from prepared statement
                mysqli_stmt_store_result($statement);
                $resultData = mysqli_stmt_num_rows($statement);
                if ($resultData === 1) {
                    header("Location: register.php?error=usernameIsTaken");
                    exit();
                }
                else {
                    //Allocating and inserting new users
                    //Prepare a SQL statement
                    $sql = "INSERT INTO users (fullName, userName, userPassword) VALUES (?, ?, ?);";
                    if ($statement = mysqli_prepare($handler, $sql)) {
                        //Create a variable for password hash
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                        //Bind variables to the prepared statement as parmeters
                        mysqli_stmt_bind_param($statement, "sss", $fullname, $username, $hashedPassword);
                        //Execute the prepared statement
                        mysqli_stmt_execute($statement);
                        header("Location: register.php?error=success");
                    }
                    else {
                        header("Location: register.php?error=statementFailed");
                        exit();
                    }
                }
            }
        }
        else {
            header("Location: register.php?error=statementFailed");
            exit();
        }
        //Close statement
        mysqli_stmt_close($statement);
    }
    /*================================================================LOGIN================================================================*/
    //Sign users in 
    function signinUsers($handler, $username, $password, $role) {
        $sql = "SELECT userID, role, userName, userPassword FROM users WHERE userName = ?";
        
        if($statement = mysqli_prepare($handler, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($statement, "s", $username);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($statement)){
                // Store result from prepared statement
                mysqli_stmt_store_result($statement);
                $getNumRows = mysqli_stmt_num_rows($statement);
                // Check if username exists, if yes then verify password
                if($getNumRows === 1){    
                                    
                    // Bind result variables
                    mysqli_stmt_bind_result($statement, $id, $role, $username, $hashedPassword);
                    if(mysqli_stmt_fetch($statement)){
                        if(password_verify($password, $hashedPassword) === true){
                            // Password is correct, so start a new session
                            session_start();
                            if ($role == "user") {   
                                $_SESSION['username'] = $username;  
                                header("Location: index.php");
                                exit();
                            }
                            else if ($role == "admin") {   
                                $_SESSION['username'] = $username;  
                                header("Location: profile.php");
                                exit();
                            }
                        }
                        else {
                            header("Location: login.php?error=invalidLogin");
                            exit();
                        }
                    }
                }
                else {
                    header("Location: login.php?error=invalidLogin");
                    exit();
                }
            }
            //Close statement
            mysqli_stmt_close($statement);
        }
        else {
            header("Location: login.php?error=invalidLogin");
            exit();
        }

    }
?>