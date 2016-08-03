<?php
    //local//$servername = "localhost";
    //local//$username = "btt_db_user_1";
    //local//$password = "S8CU8R3dyAa28JGd";
    //local//$dbname = "bttmarine_db";
    
    $password = "loranyckhe";
    $username = "oa";
    $servername = "localhost";
    $dbname = "bttmecom_bintercms";
    

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    ?>