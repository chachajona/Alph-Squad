<?php

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystem";

    //Connecting to database
    $handler = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    //Checking connection
    if (!$handler) {
        die("Connection failure: ". mysqli_connect_error());
    }

    function runQuery($handler, $query){
        $result = mysqli_query($handler, $query);
        while($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function numRows($handler, $query) {
        $result = mysqli_query($handler, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
?>